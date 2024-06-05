<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MahasiswaController::class, 'index']);
Route::get('/join', [MahasiswaController::class, 'join']);
