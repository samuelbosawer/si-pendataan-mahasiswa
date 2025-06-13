<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

    Route::controller(MahasiswaController::class)->group(function(){
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
        Route::get('mahasiswa/tambah', [MahasiswaController::class, 'create'])->name('mahasiswa.tambah');
        Route::get('mahasiswa/detail/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.detail');
        Route::delete('mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.hapus');
        Route::post('mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
        Route::get('mahasiswa/{id}/ubah', [MahasiswaController::class, 'edit'])->name('mahasiswa.ubah');
        Route::put('mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    });
});
