<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Products
Route::prefix('/program')->group(function () {
    Route::get('/edu', [ProductController::class, 'edu']);
    Route::get('/kids', [ProductController::class, 'kids']);
    Route::get('/books', [ProductController::class, 'books']);
    Route::get('/songs', [ProductController::class, 'songs']);
});

// News
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{show}', [NewsController::class, 'show']);


// Program
Route::prefix('/Program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

// About Us
Route::get('/about-us', [AboutController::class, 'index']);

// Contact Us
Route::resource('/contact-us', ContactController::class)->only(['index']);
