<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

    Route::controller(FakultasController::class)->group(function(){
        Route::get('fakultas', [FakultasController::class, 'index'])->name('fakultas');
        Route::get('fakultas/tambah', [FakultasController::class, 'create'])->name('fakultas.tambah');
        Route::get('fakultas/detail/{id}', [FakultasController::class, 'show'])->name('fakultas.detail');
        Route::delete('fakultas/{id}', [FakultasController::class, 'destroy'])->name('fakultas.hapus');
        Route::post('fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
        Route::get('fakultas/{id}/ubah', [FakultasController::class, 'edit'])->name('fakultas.ubah');
        Route::put('fakultas/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
    });
});
