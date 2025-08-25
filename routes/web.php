<?php

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

Route::get('/buku', function () {
    return view('buku');
});

// Route::get('/', ['']);
