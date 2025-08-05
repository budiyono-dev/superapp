<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

// Auth routes
Route::get('login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('otp', [App\Http\Controllers\AuthController::class, 'showOtpForm'])->name('otp.form');
Route::post('otp', [App\Http\Controllers\AuthController::class, 'verifyOtp'])->name('otp.verify');

// Post menu and create post
Route::middleware([])->group(function () {
    Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
});
