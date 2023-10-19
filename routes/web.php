<?php

use App\Http\Controllers\admin\ArtikelController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\GaleryFotoController;
use App\Http\Controllers\admin\JasaPerushaanController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login_index')->name('login');
    Route::post('login', 'login_store');
    Route::get('register', 'register_index');
    Route::post('register', 'register_store');
    Route::get('logout', 'logout');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/product', 'product');
    Route::get('/product/{jasa}', 'product_show');
    Route::get('/galeri', 'galery');
    Route::get('/contact', 'contact');
    Route::get('/artikel', 'article');
    Route::get('/artikel/{article}', 'article_show');
    Route::get('/profile', 'profile');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::controller(JasaPerushaanController::class)->group(function () {
        Route::get('/jasa-perushaan', 'index');
        Route::get('/jasa-perushaan/create', 'create');
        Route::post('/jasa-perushaan', 'store');
        Route::get('/jasa-perushaan/{jasa}', 'show');
        Route::get('/jasa-perushaan/{jasa}/edit', 'edit');
        Route::post('/jasa-perushaan/{jasa}', 'update');
        Route::delete('/jasa-perushaan/{jasa}', 'delete');
    });

    Route::controller(GaleryFotoController::class)->group(function () {
        Route::get('/galery-foto', 'index');
        Route::get('/galery-foto/create', 'create');
        Route::post('/galery-foto', 'store');
        Route::delete('/galery-foto/{galery}', 'delete');
    });

    Route::controller(ArtikelController::class)->group(function () {
        Route::get('/article', 'index');
        Route::get('/article/create', 'create');
        Route::post('/article', 'store');
        Route::get('/article/{article}', 'show');
        Route::get('/article/{article}/edit', 'edit');
        Route::post('/article/{article}', 'update');
        Route::delete('/article/{article}', 'delete');
    });
});
