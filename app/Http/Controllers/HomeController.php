<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use App\Models\Story;
use App\Models\Slider;
use App\Models\Management;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Outerweb\ImageLibrary\Models\Image;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('status', true)->latest()->take(3)->get();
        $announcements = Announcement::latest()->get();
        $about = About::first();
        $stories = Story::latest()->take(3)->get();
        $sliders = Slider::all();
        return view('index', compact('events', 'announcements', 'about', 'stories', 'sliders'));
    }

    public function aboutUs()
    {
        // Fetch the About data (assuming there's only one entry)
        $about = About::first();

        // Fetch all management members
        $management = Management::all();

        // Pass the data to the view
        return view('about', compact('about', 'management'));
    }

    public function contactUs()
    {
        // Fetch all images
        $images = Image::all();
        $randomImage = $images->isEmpty() ? null : $images->random();
        return view('contact-us', compact('randomImage'));
    }


    public function news()
    {
        return view('news');
    }

     public function events()
    {
        // Fetch all events
        $events = Event::where('status', true)->latest()->get();
        $announcements = Announcement::latest()->get();

        return view('events', compact('events', 'announcements'));
    }
     public function showEvent($id)
    {
        // Fetch the event by ID
        $event = Event::findOrFail($id);
        $otherEvents = Event::where('id', '!=', $id)->latest()->take(5)->get();
        return view('event-single', compact('event', 'otherEvents'));
    }

    public function gallery()
    {
        $images = Image::all();
        return view('gallery', compact('images'));
    }

   public function stories()
    {
        // Fetch all stories
        $stories = Story::all();
        return view('stories', compact('stories'));
    }
  public function showStory($id)
{
    $story = Story::findOrFail($id);
    $otherStories = Story::where('id', '!=', $id)->latest()->take(5)->get();
    return view('story-single', compact('story', 'otherStories'));
}
}
