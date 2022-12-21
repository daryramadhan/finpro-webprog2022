<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/beauty-all', function () {
    return view('beauty-all');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::get('/manage-product', function () {
    return view('manage-product');
});

Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::get('/updateproduct', function () {
    return view('updateproduct');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/history', function () {
    return view('history');
});

// Route::post('/register', [RegisterController::class, 'Store'])
