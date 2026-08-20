<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/run-storage-link', function () {
//     Artisan::call('storage:link');
//     return 'Storage link created!';
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact');
Route::get('/support-us', [HomeController::class, 'support'])->name('support');
Route::post('/newsletter/subscribe', [HomeController::class, 'subscribe'])->middleware('throttle:newsletter')->name('newsletter.subscribe');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/announcements', [HomeController::class, 'announcements'])->name('announcements');
Route::get('/announcements/{id}', [HomeController::class, 'showAnnouncement'])->name('announcements.show');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories');
Route::get('/stories/{id}', [HomeController::class, 'showStory'])->name('stories.show');
Route::get('/events/{id}', [HomeController::class, 'showEvent'])->name('events.show');
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml') . "\n", 200, ['Content-Type' => 'text/plain']);
})->name('robots');
