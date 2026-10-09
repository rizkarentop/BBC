<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::view('/services', 'pages.services')->name('services');

Route::view('/projects', 'pages.projects')->name('projects');

Route::view('/certificates', 'pages.certificates')->name('certificates');

Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'id'], true)) {
        session(['locale' => $locale]);
    }

    return back();
})->name('locale.switch');
