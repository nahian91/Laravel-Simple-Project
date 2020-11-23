<?php

namespace App\Http\Controllers;
use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Top;
use App\Models\Settings;
use App\Models\About;
use App\Models\Team;
use App\Models\Footer;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
        $services = Services::orderBy('created_at', 'DESC')->get();
        $portfolios = Portfolio::orderBy('created_at', 'DESC')->get();
        $top = Top::first();
        $settings = Settings::first();
        $footer = Footer::first();
        $abouts = About::all();
        $teams = Team::all();
        return view('main', compact('services', 'portfolios', 'top', 'settings', 'abouts', 'footer', 'teams'));
    }
}
