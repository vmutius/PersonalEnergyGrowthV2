<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('index');
Route::view('/aboutme', 'home.aboutme')->name('aboutme');
Route::view('/contact', 'home.contact')->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
