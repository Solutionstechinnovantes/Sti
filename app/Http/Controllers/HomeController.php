<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Slider;
//use App\Models\Client;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $contact = Contact::all();
        $portfolios = Portfolio::all();
        $teams = Team::all();

        return view('frontend.index', compact(
        'sliders',
        'about',
        'services',
        'contact',
        'teams',
        'portfolios',

    ));
    }
    public function about(){

        $about = About::first();
        $teams = Team::all();

        return view('frontend.about', compact(
            'teams',
            'about',

        ));
    }
    public function sliders(){
        $sliders = Slider::all();

        return view('frontend.sliders', compact('sliders'));
    }

    public function services(){
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }
    public function portfolio(){
        $portfolios = Portfolio::all();

        return view('frontend.portfolio', compact('portfolios'));
    }
    public function team(){
        $teams = Team::all();

            return view('frontend.team', compact('teams'));
    }
    public function contact(){
        $contact = Contact::first();
        return view('frontend.contact', compact('contact'));
    }
}
