<?php

namespace Database\Seeders;

use App\Models\Kampus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now();
        Kampus::insert([
            [
                'nama_kampus' => 'Universitas Cenderawasih',
                'alamat_kampus' => 'Kampus Lama: Jl. Raya Abepura, Jayapura; Kampus Baru: Jl. Kamp Wolker Yabansai, Waena, Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Perguruan tinggi negeri terbesar di Papua, berdiri sejak 1962'
            ],
            [
                'nama_kampus' => 'Universitas Sains dan Teknologi Jayapura',
                'alamat_kampus' => 'Jl. Sosial Padang Bulan, Hedam, Abepura, Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'PT swasta fokus sains & teknologi'
            ],
            [
                'nama_kampus' => 'Universitas Yapis Papua',
                'alamat_kampus' => 'Jl. Dr. Sam Ratulangi No.11, Dok V Atas, Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Swasta, memiliki berbagai fakultas seperti hukum, manajemen, teknik'
            ],
            [
                'nama_kampus' => 'Institut Agama Islam Negeri Fathul Muluk Jayapura',
                'alamat_kampus' => 'Jl. Merah Putih, Yabansai, Heram, Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Institut agama Islam negeri di Jayapura'
            ],
            [
                'nama_kampus' => 'Institut Seni Budaya Indonesia Tanah Papua',
                'alamat_kampus' => 'Jl. Raya Abepura–Sentani, Abepura, Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Institut seni dan budaya negeri di Papua'
            ],
            [
                'nama_kampus' => 'Poltekkes Kemenkes Jayapura',
                'alamat_kampus' => 'Jl. Padang Bulan No.2, Abepura, Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Politeknik kesehatan negeri di bawah Kemenkes'
            ],
            [
                'nama_kampus' => 'Universitas Muhammadiyah Papua',
                'alamat_kampus' => 'Jayapura (PT swasta berdiri 2020)',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Swasta milik Muhammadiyah, berdiri 2020'
            ],
            [
                'nama_kampus' => 'Universitas Internasional Papua',
                'alamat_kampus' => 'Jayapura (PT swasta berdiri 2022)',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Swasta internasional, berdiri 2022'
            ],
            [
                'nama_kampus' => 'Universitas Papua Madani Jayapura',
                'alamat_kampus' => 'Jayapura (PT swasta berdiri 2023)',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Swasta berdiri 2023'
            ],
            [
                'nama_kampus' => 'Universitas Doktor Husni Ingratubun Papua',
                'alamat_kampus' => 'Jayapura (PT swasta berdiri 2023)',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Swasta berdiri 2023'
            ],
            [
                'nama_kampus' => 'Universitas Sepuluh Nopember Papua',
                'alamat_kampus' => 'Jayapura (PT swasta berdiri 2023)',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Swasta berdiri 2023'
            ],
            [
                'nama_kampus' => 'Sekolah Tinggi Ilmu Sosial & Ilmu Pemerintahan Silas Papare',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Sekolah tinggi IPS & pemerintahan'
            ],
            [
                'nama_kampus' => 'Sekolah Tinggi Filsafat Teologi GKI Izaak Samuel Kijne',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Sekolah tinggi teologi Kristen'
            ],
            [
                'nama_kampus' => 'Sekolah Tinggi Ilmu Ekonomi Port Numbay',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Sekolah tinggi ekonomi'
            ],
            [
                'nama_kampus' => 'Sekolah Tinggi Filsafat Teologi Fajar Timur',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Sekolah tinggi teologi'
            ],
            [
                'nama_kampus' => 'Akademi Sekretari & Manajemen Indonesia Jayapura',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Akademi vokasi bidang sekretari & manajemen'
            ],
            [
                'nama_kampus' => 'Akademi Pariwisata 45 Jayapura',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Akademi vokasi pariwisata'
            ],
            [
                'nama_kampus' => 'Akademi Keperawatan RS Marthen Indey',
                'alamat_kampus' => 'Jayapura',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Akademi vokasi keperawatan'
            ],
            [
                'nama_kampus' => 'Akademi Teknologi Laboratorium Medik Papua Sehat Enaimo Anigou',
                'alamat_kampus' => 'Jayapura (vokasi berdiri 2024)',
                 'created_at' => $now,
                'updated_at' => $now,
                'keterangan' => 'Akademi teknologi lab medis'
            ],
        ]);
    }
}
