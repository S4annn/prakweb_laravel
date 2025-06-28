<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Mengarahkan root URL ke halaman mahasiswa
Route::get('/', [MahasiswaController::class, 'index']);

Route::resource('mahasiswa', MahasiswaController::class);
