<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'index']);       // Halaman Home (Wisata)
Route::get('/profile', [ProfileController::class, 'profile']); // Halaman Profil Mahasiswa
Route::get('/about', [ProfileController::class, 'about']);     // Halaman About


