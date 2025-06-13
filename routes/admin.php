<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('home');

        require_once 'admin/kampus.php';
        require_once 'admin/mahasiswa.php';
        require_once 'admin/fakultas.php';
        require_once 'admin/jurusan.php';
    });
});
