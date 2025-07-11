<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            // $table->string('nama'); // Nama lengkap mahasiswa
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('asal_kampung')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nik')->nullable();
            $table->string('ktp')->nullable();


            // Data orang tua
            $table->string('nama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();

            // verifikasi akun
            $table->string('status')->nullable();
            $table->string('keterangan')->nullable();

            $table->bigInteger('kampus_id')->nullable();
            $table->bigInteger('fakultas_id')->nullable();
            $table->bigInteger('jurusan_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
