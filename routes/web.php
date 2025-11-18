<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showloginform'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/',[BarangController::class, 'index'])->name('barang.index');
Route::resource('/barang', BarangController::class)->parameters([
    'barang' => 'kode_barang'
]);
