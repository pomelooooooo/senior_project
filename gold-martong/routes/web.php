<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoresController;

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

// Route::get('/stores', function () {
//     return view('stores.index');
// });

Route::resource('stores', StoresController::class);
// Route::get('/stores/all', [StoresController::class,'index'])->name('storesAll');
Route::get('/stores/edit/{id}', [StoresController::class,'edit']);
Route::get('/stores/update/{id}', [StoresController::class,'update']);
Route::get('/stores/delete/{id}', [StoresController::class,'destroy']);

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

Route::get('/member', function () {
    return view('member.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

