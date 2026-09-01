<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\AuthController as FrontAuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthController as BackendAuthController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ContactController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::prefix('/')->group(function () {
    Route::get('/', [FrontPageController::class, 'welcome'])->name('home');
    Route::get('/shop', [FrontPageController::class, 'shop'])->name('shop');
    Route::get('/about', [FrontPageController::class, 'about'])->name('about');
    Route::get('/contact', [FrontPageController::class, 'contact'])->name('contact');
    Route::get('/digitalProducts', [FrontPageController::class, 'digitalProducts'])->name('digitalProducts');

    // Front Auth
    Route::get('/login', [FrontAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [FrontAuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [FrontAuthController::class, 'logout'])->name('logout');

    // Forgot password
    Route::get('/forgot-password', fn() => view('auth.forgot-password'))->name('password.request');

    // Register
    Route::get('/register', [FrontAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [FrontAuthController::class, 'register']);
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    // Auth
    Route::get('/login', [BackendAuthController::class, 'showLoginForm'])->name('admin.login');
    // Route::post('/login', [BackendAuthController::class, 'login'])->name('admin.login.post');
    // Route::post('/logout', [BackendAuthController::class, 'logout'])->name('admin.logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Resources
    Route::resource('banners', BannerController::class);
    Route::resource('products', ProductController::class);
    Route::resource('settings', SettingsController::class);
    Route::resource('users', UserController::class);
    Route::resource('about', AboutController::class);
    Route::resource('contacts', ContactController::class);

    // Extra route for contacts show
    Route::get('contacts/show', [ContactController::class, 'show'])->name('contacts.show');
});
