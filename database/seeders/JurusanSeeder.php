<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('jurusans')->insert([
            // Fakultas Teknik
            ['nama_jurusan' => 'Teknik Sipil', 'keterangan' => 'Konstruksi dan infrastruktur', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Teknik Elektro', 'keterangan' => 'Listrik dan sistem kendali', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Teknik Mesin', 'keterangan' => 'Rekayasa mesin dan energi', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Teknik Informatika', 'keterangan' => 'Pemrograman dan sistem informasi', 'created_at' => $now, 'updated_at' => $now],

            // Fakultas Keguruan dan Ilmu Pendidikan
            ['nama_jurusan' => 'Pendidikan Matematika', 'keterangan' => 'Mengajar dan riset matematika', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Pendidikan Bahasa Inggris', 'keterangan' => 'Mengajar bahasa Inggris', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Pendidikan Biologi', 'keterangan' => 'Ilmu hayati untuk pendidikan', 'created_at' => $now, 'updated_at' => $now],

            // Fakultas Ekonomi dan Bisnis
            ['nama_jurusan' => 'Manajemen', 'keterangan' => 'Manajemen bisnis dan organisasi', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Akuntansi', 'keterangan' => 'Pembukuan dan laporan keuangan', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Ekonomi Pembangunan', 'keterangan' => 'Kebijakan ekonomi dan pembangunan daerah', 'created_at' => $now, 'updated_at' => $now],

            // Fakultas Ilmu Sosial dan Ilmu Politik
            ['nama_jurusan' => 'Ilmu Pemerintahan', 'keterangan' => 'Administrasi dan kebijakan publik', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Hubungan Internasional', 'keterangan' => 'Diplomasi dan studi global', 'created_at' => $now, 'updated_at' => $now],

            // Fakultas Hukum
            ['nama_jurusan' => 'Ilmu Hukum', 'keterangan' => 'Hukum pidana, perdata, tata negara', 'created_at' => $now, 'updated_at' => $now],

            // Fakultas Kesehatan
            ['nama_jurusan' => 'Kesehatan Masyarakat', 'keterangan' => 'Promosi kesehatan, epidemiologi', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Keperawatan', 'keterangan' => 'Pelayanan dan praktik keperawatan', 'created_at' => $now, 'updated_at' => $now],

            // Fakultas Matematika dan IPA
            ['nama_jurusan' => 'Biologi', 'keterangan' => 'Ilmu hayati', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Fisika', 'keterangan' => 'Studi alam dan energi', 'created_at' => $now, 'updated_at' => $now],
            ['nama_jurusan' => 'Kimia', 'keterangan' => 'Reaksi kimia dan senyawa', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
