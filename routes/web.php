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
    return view('pages.awal');
});

Route::get('home', function () {
    return view('pages.awal');
});

Route::get('catalogue', function () {
    return view('pages.catalogue');
});

Route::get('product', function () {
    return view('pages.produk');
});

Route::get('size', function () {
    return view('pages.size');
});


Route::get('dashboard', function () {
    return view('layouts.admin');
});
