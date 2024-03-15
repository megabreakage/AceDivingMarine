<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Mail\CustomerInquiry;
use App\Mail\InquirySubmited;
use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use Exception;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Throwable;

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
                'image' => 'slider-banner-1.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'ACE Diving Marine Services',
                'image' => 'slider-banner-2.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'ACE Diving Marine Services',
                'image' => 'slider-banner-3.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ]
        ];

        $partners = ['logo11.png', 'logo10.png', 'logo9.png', 'logo8.png', 'logo7.png'];

        $this->data = [
            'title' => $this->page['about']['name'],
            'tagline' => $this->page['about']['tagline'],
            'description' => $this->page['about']['description'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => 'acedivingmarine.com',
            'partners' => $partners,
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
            'description' => $this->page['about']['description'],
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
            'description' => $this->page['about']['description'],
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
            'description' => 'Contact us to ge more information',
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
}
