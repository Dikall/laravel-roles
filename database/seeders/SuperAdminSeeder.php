<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminbaak = User::create([
            'name' => 'Dikal',
            'email' => 'adminbaak@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $adminbaak->assignRole('Admin Baak');
        // Creating Admin User
        $admin = User::create([
            'name' => 'Meri',
            'email' => 'adminkeu@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $admin->assignRole('Admin Keuangan');
        // Creating Product Manager User
        $mahasiswa = User::create([
            'name' => 'Fahri',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $mahasiswa->assignRole('Mahasiswa');
    }
}
