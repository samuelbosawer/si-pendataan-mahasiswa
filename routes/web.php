<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar', [App\Http\Controllers\HomeController::class, 'daftar'])->name('daftar');
Route::post('/daftar-simpan', [App\Http\Controllers\HomeController::class, 'daftar_store'])->name('daftarStore');


Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');

require_once 'admin.php';
