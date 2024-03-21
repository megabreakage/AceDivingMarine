<?php

namespace App\Http\Controllers;

use App\Http\Requests\Page\StorePageRequest;
use App\Http\Requests\Page\UpdatePageRequest;
use App\Http\Requests\StoreInquiryRequest;
use App\Mail\CustomerInquiry;
use App\Models\About;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Service;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PageController extends Controller
{
    protected $data;
    protected $page;
    protected $message;

    public function __construct()
    {
        $services = Service::all();
        $this->page = [
            'emails' => Contact::where('contact_type_id', 1)->where('active', true)->get(),
            'phone_numbers' => Contact::where('contact_type_id', 2)->where('active', true)->get(),
            'socials' => Contact::where('contact_type_id', 3)->where('active', true)->get(),
            'services' => $services,
            'about' => About::find(1),
        ];
    }

    public function index()
    {
        $sliders = [
            [
                'title' => 'ACE Diving Marine Services',
                'image' => 'slider-banner-4.png',
                'action_button' => 'Learn About Us',
                'button_url' => 'about-us',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'Construction Capabilities',
                'image' => 'slider-banner-7.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'Platform/Pipeline Capabilities',
                'image' => 'slider-banner-8.png',
                'action_button' => 'Learn More',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'Subsea Services',
                'image' => 'slider-banner-6.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'Underwater Inspection',
                'image' => 'slider-banner-5.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ]
        ];

        $certs = ['logo-1.png', 'logo-2.png', 'logo-3.png', 'logo-4.png', 'logo-5.png'];

        $this->data = [
            'title' => $this->page['about']['name'],
            'tagline' => $this->page['about']['tagline'],
            'description' => $this->page['about']['description'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => 'acedivingmarine.com',
            'certs' => $certs,
            'sliders' => $sliders,
            'page_data' => $this->page,
        ];

        return view('welcome', $this->data);
    }

    public function about()
    {
        $partners = ['logo11.png', 'logo10.png', 'logo9.png', 'logo8.png', 'logo7.png'];
        $this->data = [
            'title' => 'About Us',
            'tagline' => $this->page['about']['tagline'],
            'description' => $this->page['about']['tagline'],
            'overview' => $this->page['about']['description'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => route('about-us'),
            'page_data' => $this->page,
            'partners' => $partners,
        ];

        // return response()->json($this->data);

        return view('about.about-us', $this->data);
    }

    public function services()
    {
        $this->data = [
            'title' => 'Services',
            'tagline' => $this->page['about']['tagline'],
            'description' => $this->page['about']['tagline'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => route('services'),
            'page_data' => $this->page,
        ];

        // return response()->json($this->data);
        return view('service.services', $this->data);
    }

    public function service_details($slug)
    {
        $service = Service::where('slug', $slug)->where('active', true)->first();
        if (!$service) abort(404);

        $this->data = [
            'title' => $service->name,
            'tagline' => $this->page['about']['tagline'],
            'description' => $service->description,
            'keywords' => $service->keywords,
            'image' => $service->image,
            'logo' => $this->page['about']['logo'],
            'url' => route('service.show', $service->slug),
            'page_data' => $this->page,
            'service' => $service,
        ];
        return view('service.service-details', $this->data);
    }

    public function contact_us()
    {
        $this->data = [
            'title' => 'Contact Us',
            'tagline' => $this->page['about']['tagline'],
            'description' => "Feel free to reach out to us! We\'re here to assist you. Contact us today for more information and support.",
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => route('services'),
            'page_data' => $this->page,
        ];

        return view('contact', $this->data);
    }

    public function faqs()
    {
        $this->data = [
            'title' => 'FAQ',
            'tagline' => $this->page['about']['tagline'],
            'description' => $this->page['about']['description'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => route('services'),
            'page_data' => $this->page,
        ];

        return view('contact', $this->data);
    }

    public function privacy_policy()
    {
        $this->data = [
            'title' => 'Privacy Policy',
            'tagline' => $this->page['about']['tagline'],
            'description' => $this->page['about']['description'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => route('services'),
            'page_data' => $this->page,
        ];

        return view('contact', $this->data);
    }

    public function submit_inquiry(StoreInquiryRequest $request)
    {
        $request->validated();

        try {
            $mail_data = [
                'title' => 'Customer Contact Form',
                'subject' => $request->subject,
                'body' => $request->message,
                'customer_name' => $request->firstname . ' ' . $request->lastname,
                'customer_email' => $request->email,
                'url' => config('app.url'),
            ];

            $sent = Mail::to('hr@acedivingmarine.com')
                ->cc($request->email)
                ->send(new CustomerInquiry($mail_data));
            if (!$sent)
                throw new Exception('Your message has not been submitted successfully, try again later', 0);

            return Redirect::back()->with('success', 'Thank you, Your inquiry has been sent successfully.');
        } catch (\Throwable $th) {
            if (config('app.env' == 'production')) $this->message = 'Your message has not been submitted successfully, try again later';
            return Redirect::back()->with('error', $th->getMessage());
        }
    }

    /**
     * END SITE PAGES FUNCTIONS
     * ---------------------------------------------------------------------------------
     */


    /**
     * START 
     * DASHBOARD FUNCTIONS 
     * ---------------------------------------------------------------------------------
     */

    //  1. List All the Pages
    public function list_pages()
    {
        $this->data = [
            'pages' => Page::all(),
        ];

        return view('admin.pages.seo-pages.all-pages', $this->data);
    }

    // 2. Show single page details
    public function show($id)
    {
        $this->data = [
            'pages' => Page::all(),
            'page' => Page::find($id),
        ];
        return view('admin.pages.seo-pages.view-seo-page', $this->data);
    }

    // 3. Add a new page
    public function store(StorePageRequest $request)
    {
        $request->validated();

        try {
            $slug = Str::slug($request->name);

            $exists = Page::where('slug', $slug)->exists();

            while ($exists) {
                $slug = $slug . '-' . rand(100, 9999);
            }

            $upload = uploadImage($request, $slug, 'storage/uploads/images/pages');

            if (!$upload['status']) throw new Exception('Uploading Page Image failed, try again later!', 0);

            $record = Page::create([
                'identifier' => generate_identifier(),
                'name' => $request->name,
                'slug' => $slug,
                'description' => $request->description,
                'image' => $upload['new_name'],
                'keywords' => $request->keywords,
            ]);

            if (!$record) throw new Exception('Creating a new Page failed, try again later!', 0);

            return Redirect::back()->with('success', 'Page created successfully.');
        } catch (\Throwable $th) {
            $this->message = config('app.env') == 'production' ? 'Creating a new Page failed, try again later!' : $th->getMessage();
            return Redirect::back()->with('error', $this->message());
        }
    }

    // 4. Update details of a page
    public function update(UpdatePageRequest $request, $id)
    {
        $request->validated();

        try {
            $page = Page::find($id);
            if (!$page) throw new Exception('Page not found!', 0);

            $update = $page->update($request->all());

            if (!$update) throw new Exception('Updating Page failed, try again later!', 0);
            return Redirect::back()->with('success', 'Page updated successfully.');
        } catch (\Throwable $th) {
            $this->message = config('app.env') == 'production' ? 'Updating Page failed, try again later!' : $th->getMessage();
            return Redirect::back()->with('error', $this->message());
        }
    }

    // 5. Destroy a page
    public function destroy($id)
    {
        //
    }

    /**
     * END DASHBOARD FUNCTIONS
     * ---------------------------------------------------------------------------------
     */
}
