<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $now = Carbon::now();

        DB::table('fakultas')->insert([
            [
                'nama_fakultas' => 'Fakultas Teknik',
                'keterangan' => 'Bidang teknik sipil, elektro, mesin, industri, dll',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Keguruan dan Ilmu Pendidikan',
                'keterangan' => 'Fokus pada pendidikan dan pelatihan guru',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Hukum',
                'keterangan' => 'Bidang hukum dan peradilan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis',
                'keterangan' => 'Manajemen, akuntansi, dan ekonomi pembangunan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
                'keterangan' => 'Administrasi negara, hubungan internasional, dll',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Ilmu Komputer',
                'keterangan' => 'Sistem informasi, informatika, dan rekayasa perangkat lunak',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Kedokteran',
                'keterangan' => 'Pendidikan dokter dan riset medis',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Kesehatan Masyarakat',
                'keterangan' => 'Promosi kesehatan, epidemiologi, manajemen kesehatan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Pertanian',
                'keterangan' => 'Agronomi, agribisnis, dan teknologi pertanian',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_fakultas' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
                'keterangan' => 'Matematika, biologi, kimia, dan fisika',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
