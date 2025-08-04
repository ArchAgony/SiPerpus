<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LokasiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('beranda');
// });

// Route::get('/buku', function () {
//     return view('buku');
// });

// Route::get('/lokasi', function () {
//     return view('lokasi');
// });

Route::get('/', [BerandaController::class, 'index']);
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/lokasi', [LokasiController::class, 'index']);
