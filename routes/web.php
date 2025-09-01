<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
// memanggil controller LokasiController
use App\Http\Controllers\LokasiController;

Route::get('/', function () {
    return view('beranda');
});

// ini routing halaman atau menu lokasi
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/lokasi/create', [LokasiController::class, 'create']);
Route::get('/lokasi/edit', [LokasiController::class, 'edit']);
Route::get('/lokasi/delete/{id}', [LokasiController::class, 'destroy']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::get('/buku/edit', [BukuController::class, 'edit']);
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy']);

// Route::get('/buku', function () {
//     return view('buku');
// });

// Route::get('/', ['']);
