<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\Kampus;
use App\Models\Fakultas;
use App\Models\Jurusan;
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'mahasiswa');
        })->get();

        // Ambil data kampus, fakultas, dan jurusan dari DB
        $kampusList = Kampus::all();
        $fakultasList = Fakultas::all();
        $jurusanList = Jurusan::all();

        foreach ($users as $i => $user) {
            $kampus = $kampusList->random();
            $fakultas = $fakultasList->random();
            $jurusan = $jurusanList->random();

            Mahasiswa::create([
                'tempat_lahir' => 'Ilaga',
                'tanggal_lahir' => Carbon::parse('2000-01-' . rand(1, 28)),
                'asal_kampung' => 'Kampung Ilaga',
                'angkatan' => '202' . rand(0, 4),
                'alamat' => 'Waena',
                'nama_ayah' => 'Bapak ' . $user->nama,
                'pekerjaan_ayah' => 'Petani',
                'nama_ibu' => 'Ibu ' . $user->nama,
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'kampus_id' => $kampus->id,
                'fakultas_id' => $fakultas->id,
                'jurusan_id' => $jurusan->id,
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

