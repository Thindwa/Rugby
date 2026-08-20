<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use App\Models\Story;
use App\Models\Slider;
use App\Models\Management;
use App\Models\Announcement;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Outerweb\ImageLibrary\Models\Image;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('status', true)
            ->whereDate('start_date', '>=', today())
            ->orderBy('start_date')
            ->take(3)
            ->get();
        $announcements = Announcement::latest()->take(3)->get();
        $about = About::first();
        $stories = Story::latest()->take(3)->get();
        $sliders = Slider::all();

        return view('index', compact('events', 'announcements', 'about', 'stories', 'sliders'));
    }

    public function aboutUs()
    {
        // Fetch the About data (assuming there's only one entry)
        $about = About::first();
        $randomImage = Image::query()->inRandomOrder()->first();
        $management = Management::all();

        // Pass the data to the view
        return view('about', compact('about', 'management', 'randomImage'));
    }

    public function contactUs()
    {
        $randomImage = Image::query()->inRandomOrder()->first();
        return view('contact-us', compact('randomImage'));
    }

    public function support()
    {
        return view('support');
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'website' => ['nullable', 'max:0'],
        ]);

        NewsletterSubscriber::updateOrCreate(
            ['email' => strtolower($validated['email'])],
            [
                'name' => $validated['name'] ?? null,
                'source' => $request->string('source')->limit(50)->toString() ?: 'website',
                'subscribed_at' => now(),
            ],
        );

        return back()->with('newsletter_success', 'Thank you for joining our community.');
    }


    public function news()
    {
        return view('news');
    }

    public function events()
    {
        $events = Event::where('status', true)
            ->whereDate('start_date', '>=', today())
            ->orderBy('start_date')
            ->get();
        $randomImage = Image::query()->inRandomOrder()->first();

        return view('events', compact('events', 'randomImage'));
    }

    public function announcements()
    {
        $announcements = Announcement::latest()->get();
        $randomImage = Image::query()->inRandomOrder()->first();

        return view('announcements', compact('announcements', 'randomImage'));
    }

    public function showAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);
        $otherAnnouncements = Announcement::where('id', '!=', $id)
            ->latest()
            ->take(4)
            ->get();

        return view('announcement-single', compact('announcement', 'otherAnnouncements'));
    }
     public function showEvent($id)
    {
        // Fetch the event by ID
        $event = Event::findOrFail($id);
        $otherEvents = Event::where('id', '!=', $id)->latest()->take(5)->get();
        $randomImage = Image::query()->inRandomOrder()->first();
        return view('event-single', compact('event', 'otherEvents', 'randomImage'));
    }

    public function gallery()
    {

         $images = Image::paginate(9);
        $randomImage = $images->isEmpty() ? null : $images->random();
        return view('gallery', compact('images', 'randomImage'));
    }

    public function stories()
    {
        $stories = Story::latest()->get();
        $randomImage = Image::query()->inRandomOrder()->first();
        return view('stories', compact('stories', 'randomImage'));
    }
  public function showStory($id)
{
    $story = Story::findOrFail($id);
    $otherStories = Story::where('id', '!=', $id)->latest()->take(5)->get();
    $randomImage = Image::query()->inRandomOrder()->first();
    return view('story-single', compact('story', 'otherStories', 'randomImage'));
  }

    public function sitemap()
    {
        $urls = collect([
            ['loc' => route('home'), 'lastmod' => now()],
            ['loc' => route('about'), 'lastmod' => About::query()->latest('updated_at')->value('updated_at')],
            ['loc' => route('stories'), 'lastmod' => Story::query()->latest('updated_at')->value('updated_at')],
            ['loc' => route('events'), 'lastmod' => Event::query()->latest('updated_at')->value('updated_at')],
            ['loc' => route('announcements'), 'lastmod' => Announcement::query()->latest('updated_at')->value('updated_at')],
            ['loc' => route('gallery'), 'lastmod' => now()],
            ['loc' => route('contact'), 'lastmod' => now()],
        ]);

        $urls = $urls->merge(Story::query()->get(['id', 'updated_at'])->map(fn ($story) => [
            'loc' => route('stories.show', $story->id),
            'lastmod' => $story->updated_at,
        ]));
        $urls = $urls->merge(Event::query()->where('status', true)->get(['id', 'updated_at'])->map(fn ($event) => [
            'loc' => route('events.show', $event->id),
            'lastmod' => $event->updated_at,
        ]));
        $urls = $urls->merge(Announcement::query()->get(['id', 'updated_at'])->map(fn ($announcement) => [
            'loc' => route('announcements.show', $announcement->id),
            'lastmod' => $announcement->updated_at,
        ]));

        return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
    }
}
