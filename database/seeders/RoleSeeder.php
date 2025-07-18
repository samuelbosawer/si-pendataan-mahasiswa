<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role = Role::create([
        "name" => "admin",
        'guard_name' => 'web',
       ]);

       $role = Role::create([
        "name" => "mahasiswa",
        'guard_name' => 'web',
       ]);

       $role = Role::create([
        "name" => "ketua",
        'guard_name' => 'web',
       ]);
    }
}
