<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/nilai_mahasiswa', [MahasiswaController::class, 'nilaiMahasiswa']);