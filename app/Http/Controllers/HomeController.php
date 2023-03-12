<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Trainer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $trainers = Trainer::all();
        $testimonials = Testimonial::all();

        return view('home.index', compact(
            'sliders',
            'about',
            'services',
            'trainers',
            'testimonials',
        ));
    }

    public function about()
    {
        $about = About::first();

        return view('home.about', compact(
            'about'
        ));
    }

    public function vehicles()
    {
        $vehicles = Vehicle::all();

        return view('home.vehicles', compact(
            'vehicles'
        ));
    }

    public function trainers()
    {
        $trainers = Trainer::all();

        return view('home.trainers', compact(
            'trainers'
        ));
    }

    public function contact()
    {
        $contact = Contact::first();

        return view('home.contact', compact(
            'contact'
        ));
    }

    public function services()
    {
        $services = Service::all();

        return view('home.services', compact(
            'services'
        ));
    }

}
