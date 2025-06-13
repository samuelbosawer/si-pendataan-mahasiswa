<?php

use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

    Route::controller(JurusanController::class)->group(function(){
        Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan');
        Route::get('jurusan/tambah', [JurusanController::class, 'create'])->name('jurusan.tambah');
        Route::get('jurusan/detail/{id}', [JurusanController::class, 'show'])->name('jurusan.detail');
        Route::delete('jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.hapus');
        Route::post('jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');
        Route::get('jurusan/{id}/ubah', [JurusanController::class, 'edit'])->name('jurusan.ubah');
        Route::put('jurusan/{id}', [JurusanController::class, 'update'])->name('mahasiswa.update');
    });
});
