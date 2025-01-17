<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function news()
    {
        return view('news');
    }

    public function events()
    {
        return view('events');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function stories()
    {
        return view('stories');
    }


}
