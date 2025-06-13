<?php

use App\Http\Controllers\KampusController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

    Route::controller(KampusController::class)->group(function(){
        Route::get('kampus', [KampusController::class, 'index'])->name('kampus');
        Route::get('kampus/tambah', [KampusController::class, 'create'])->name('kampus.tambah');
        Route::get('kampus/detail/{id}', [KampusController::class, 'show'])->name('kampus.detail');
        Route::delete('kampus/{id}', [KampusController::class, 'destroy'])->name('kampus.hapus');
        Route::post('kampus/store', [KampusController::class, 'store'])->name('kampus.store');
        Route::get('kampus/{id}/ubah', [KampusController::class, 'edit'])->name('kampus.ubah');
        Route::put('kampus/{id}', [KampusController::class, 'update'])->name('kampus.update');
    });
});
