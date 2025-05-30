<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Home page
Route::get('/', [SiteController::class, 'home'])->name('home');

// About me page
Route::get('/about', [SiteController::class, 'about'])->name('about');

// Skills page
Route::get('/skills', [SiteController::class, 'skills'])->name('skills');

// Portfolio/Projects page
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');

// Contact page
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'contactSubmit'])->name('contact.submit');
