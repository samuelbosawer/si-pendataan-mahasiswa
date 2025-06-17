<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'nama' => 'Admin',
            'alamat' => 'Sentani',
            'no_hp' => '082198159714',
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('admin@gmail.com'),
            'jenis_kelamin' => '',

        ]);
        $user->assignRole('admin');



        $user = User::create([
            'nama' => 'Samuel Tabuni',
            'alamat' => 'Sentani',
            'no_hp' => '082198159711',
            'email' => 'samuel@gmail.com',
            'password' =>  bcrypt('samuel@gmail.com'),
            'jenis_kelamin' => '',

        ]);
        $user->assignRole('mahasiswa');


        $user = User::create([
            'nama' => 'Ketua Komunitas',
            'alamat' => 'Sentani',
            'no_hp' => '082198159711',
            'email' => 'ketua@gmail.com',
            'password' =>  bcrypt('ketua@gmail.com'),
            'jenis_kelamin' => '',

        ]);
        $user->assignRole('ketua');


        $namaMahasiswa = [
            'Yohanis Murib',
            'Martha Tabuni',
            'Elisa Kogoya',
            'Martinus Telenggen',
            'Yuliana Murib',
            'Tobias Magai',
            'Debora Murib',
            'Septinus Telenggen',
            'Selpina Tabuni',
            'Yakobus Murib',
        ];

        foreach ($namaMahasiswa as $i => $nama) {
            $user = User::create([
                'nama' => $nama,
                'alamat' => 'Kabupaten Puncak',
                'no_hp' => '0812' . rand(10000000, 99999999),
                'email' => strtolower(str_replace(' ', '', $nama)) . '@gmail.com',
                'password' => bcrypt('password123'),
                'jenis_kelamin' => $i % 2 == 0 ? 'L' : 'P',
            ]);

            $user->assignRole('mahasiswa');



    }

}
}
