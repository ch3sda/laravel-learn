<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Guest routes (No login needed)
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

});

// Authenticated routes (Login needed)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});

Auth::routes();
