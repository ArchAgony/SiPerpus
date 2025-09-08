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
Route::post('/lokasi/create', [LokasiController::class, 'store']);
Route::get('/lokasi/edit/{id}', [LokasiController::class, 'edit']);
Route::post('/lokasi/update/{id}', [LokasiController::class, 'update']);
Route::get('/lokasi/delete/{id}', [LokasiController::class, 'destroy']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/create', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id}', [BukuController::class, 'update']);
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy']);

// Route::get('/buku', function () {
//     return view('buku');
// });

// Route::get('/', ['']);
