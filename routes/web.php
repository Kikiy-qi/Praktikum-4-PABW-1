<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'form'])->name('form');
Route::post('/proses', [DataController::class, 'proses'])->name('proses');
Route::get('/daftar', [DataController::class, 'daftar'])->name('daftar');