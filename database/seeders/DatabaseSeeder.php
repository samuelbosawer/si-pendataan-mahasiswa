<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(KampusSeeder::class);
        $this->call(FakultasSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(MahasiswaSeeder::class);
    }
}
