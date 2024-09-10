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

// Routes for dynamic package components
Route::get('/packages/{type}', function ($type) {
    if ($type === 'haji') {
        return view('components.packages-haji');
    } elseif ($type === 'umroh') {
        return view('components.packages-umroh');
    }
    abort(404); // If neither, show 404
});