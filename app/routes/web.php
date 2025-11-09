<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BookingController;

//giao diện người dùng
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/rooms', [FrontendController::class, 'rooms'])->name('rooms');
Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking');
Route::get('/deals', [FrontendController::class, 'deals'])->name('deals');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

// Trang chủ → chuyển về đăng nhập
Route::get('/login', function () {
    return redirect()->route('login');
});

// Đăng ký
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Đăng nhập
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Dashboard (chỉ vào được khi đã đăng nhập)
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

// Đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
