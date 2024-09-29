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
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user/dashboard', [App\Http\Controllers\User\Dashboard::class, 'index'])->name('user_dashboard');
});

Route::middleware(['member', 'verified'])->group(function () {});



Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('admin_dashboard');
    Route::get('/admin/user', [App\Http\Controllers\Admin\User::class, 'index'])->name('admin_user');
    Route::get('/admin/blogpost', [App\Http\Controllers\Admin\Blogpost::class, 'index'])->name('admin_blogpost');
    Route::get('/admin/course', [App\Http\Controllers\Admin\Course::class, 'index'])->name('admin_course');
});
