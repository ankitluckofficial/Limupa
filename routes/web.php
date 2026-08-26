<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\AuthController as FrontAuthController; // Front Auth
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthController as BackendAuthController; // Backend Auth

// Front pages
Route::get('/', [FrontPageController::class, 'welcome']);
Route::get('/shop', [FrontPageController::class, 'shop']);
Route::get('/about', [FrontPageController::class, 'about']);
Route::get('/contact', [FrontPageController::class, 'contact']);

// Front Auth routes
Route::get('/login', [FrontAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [FrontAuthController::class, 'login'])->name('login.post');
Route::post('/logout', [FrontAuthController::class, 'logout'])->name('logout');

// Forgot password route
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Register routes
Route::get('/register', [FrontAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [FrontAuthController::class, 'register']);

// Backend routes (admin panel)
Route::get('/admin/login', [BackendAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [BackendAuthController::class, 'login'])->name('admin.login.post');
// Route::post('/admin/logout', [BackendAuthController::class, 'logout'])->name('admin.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// // Protected dashboard
// Route::middleware(['adminauth'])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });
