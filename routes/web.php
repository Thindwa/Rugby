<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories');
Route::get('/stories/{id}', [HomeController::class, 'showStory'])->name('stories.show');
Route::get('/events/{id}', [HomeController::class, 'showEvent'])->name('events.show');
