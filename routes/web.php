<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);

