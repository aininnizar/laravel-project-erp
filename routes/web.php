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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/manufaktur/product', function () {
    return view('manufaktur/product');
});

Route::get('/manufaktur/product-detail', function () {
    return view('manufaktur/product-detail');
});

Route::get('/manufaktur/create-product-sold', function () {
    return view('manufaktur/create-product-sold');
});

Route::get('/manufaktur/create-product-purchased', function () {
    return view('manufaktur/create-product-purchased');
});


// GONDRONG GANTENG