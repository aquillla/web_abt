<?php

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

Route::get('/', function () { return view('beranda');});
Route::get('/tentang-kami', function () { return view('tentangkami');});
Route::get('/paket-travel', function () { return view('pakettravel');});
Route::get('/galeri-testimoni', function () { return view('galeritesti');});

// Umroh component routes
Route::get('/components/umroh-sept', function () {
    return view('components.umroh-sept'); 
});

Route::get('/components/umroh-okt', function () {
    return view('components.umroh-okt'); 
});

Route::get('/components/umroh-nov', function () {
    return view('components.umroh-nov'); 
});

Route::get('/components/umroh-des', function () {
    return view('components.umroh-des'); 
});

Route::get('/components/umroh-promo', function () {
    return view('components.umroh-promo'); 
});

// Haji component routes
Route::get('/components/haji', function () {
    return view('components.haji'); 
});
