<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\PostController;

Route::view('/', 'home.index')->name('index');
Route::view('/aboutme', 'home.aboutme')->name('aboutme');
Route::view('/contact', 'home.contact')->name('contact');

Route::get('/glossar', [GlossaryController::class, 'index'])->name('glossar');
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blog.show');
Route::resource('posts.comments', CommentController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
