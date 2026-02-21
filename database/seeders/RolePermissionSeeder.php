<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = ['create', 'edit', 'delete', 'view'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission],
                ['guard_name' => 'web']
            );
        }

        // Create admin role
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin'],
            ['guard_name' => 'web']
        );

        // Give all permissions to admin
        $adminRole->syncPermissions($permissions);

        // Create other roles (without full permissions)
        Role::firstOrCreate(['name' => 'writer'], ['guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'editor'], ['guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'viewer'], ['guard_name' => 'web']);
    }
}
