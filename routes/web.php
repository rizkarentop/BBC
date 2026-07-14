<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::view('/services', 'pages.services')->name('services');

Route::view('/projects', 'pages.projects')->name('projects');

Route::view('/gallery', 'pages.gallery')->name('gallery');

Route::view('/certificates', 'pages.certificates')->name('certificates');

Route:: view('/contact', 'pages.contact')->name('contact');