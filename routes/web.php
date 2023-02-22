<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
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
Route::prefix('/product')->group(function () {
    Route::get('/edu', [ProductsController::class, 'edu']);
    Route::get('/kids', [ProductsController::class, 'kids']);
    Route::get('/books', [ProductsController::class, 'books']);
    Route::get('/songs', [ProductsController::class, 'songs']);
});

// News
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{show}', [NewsController::class, 'show']);

// Program
Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

// About Us
Route::get('/about', [AboutController::class, 'index']);

// Contact Us
Route::resource('/contact', ContactController::class)->only(['index']);
