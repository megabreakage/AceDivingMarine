<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $data;
    protected $page;

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
                'title' => 'Ace Diving',
                'image' => 'slider-banner-1.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'Ace Diving',
                'image' => 'slider-banner-2.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ], [
                'title' => 'Ace Diving',
                'image' => 'slider-banner-3.png',
                'action_button' => 'View Our Services',
                'button_url' => 'services',
                'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service'
            ]
        ];

        $this->data = [
            'title' => $this->page['about']['name'],
            'description' => $this->page['about']['description'],
            'keywords' => $this->page['about']['keywords'],
            'image' => $this->page['about']['image'],
            'logo' => $this->page['about']['logo'],
            'url' => route('home'),
            'sliders' => $sliders,
            'page_data' => $this->page,
        ];

        // return response()->json($this->data);

        return view('welcome', $this->data);
    }

    public function about()
    {
        $this->data = [
            'title' => 'About Us',
        ];
        return view('about.about', $this->data);
    }

    public function services()
    {
        $this->data = [
            'title' => 'Services',
        ];
        return view('service.service', $this->data);
    }

    public function service_details($slug)
    {
        // $service = Service::where('slug', $slug);
        $this->data = [
            'title' => 'Service Details',
            // 'service' => $service,
        ];
        return view('service.services_details', $this->data);
    }

    public function contact_us()
    {
        $page = [
            'title' => 'Contact Us',
            'description' => '',
            'keywords' => '',
            'image' => '',
            'url' => route('contact-us'),
        ];
        return view('contact_us', $this->pageData($page));
    }
}
