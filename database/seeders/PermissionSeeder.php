<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-mahasiswa',
            'edit-mahasiswa',
            'delete-mahasiswa',
            'show-mahasiswa',
            ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
