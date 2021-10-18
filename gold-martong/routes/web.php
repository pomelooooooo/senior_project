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

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/treasury', function () {
    return view('treasury');
});

Route::get('/trade', function () {
    return view('trade');
});

Route::get('/pledge', function () {
    return view('pledge');
});

Route::get('/report', function () {
    return view('report');
});

