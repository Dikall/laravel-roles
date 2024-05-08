<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Admin Baak']);
        $admin = Role::create(['name' => 'Admin Keuangan']);
        $mahasiswa = Role::create(['name' => 'Mahasiswa']);
        $admin->givePermissionTo([
            'show-mahasiswa',
        ]);

        $mahasiswa->givePermissionTo([
            'edit-mahasiswa',
            'show-mahasiswa',
            ]);
    }
}
