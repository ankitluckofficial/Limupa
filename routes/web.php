<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontPageController::class, 'welcome']);
Route::get('/shop', [FrontPageController::class, 'shop']);
Route::get('/about', [FrontPageController::class, 'about']);
Route::get('/contact', [FrontPageController::class, 'contact']);
