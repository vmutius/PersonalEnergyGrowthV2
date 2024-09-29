<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\PostController;

Route::middleware('guest')->group(function () {
    Route::view('/', 'home.index')->name('index');
    Route::view('/aboutme', 'home.aboutme')->name('aboutme');
    Route::view('/contact', 'home.contact')->name('contact');

    Route::get('/glossar', [GlossaryController::class, 'index'])->name('glossar');
    Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
    Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blog.show');
    Route::resource('posts.comments', CommentController::class);
});

//TODO: TwoFactor später bei user, member und admin ergänzen.
Route::middleware(['auth', 'verified'])->group(function () {});

Route::middleware(['member', 'verified'])->group(function () {
    Route::get('/glossar', [GlossaryController::class, 'index'])->name('glossar');
});



Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('admin_dashboard');
});
