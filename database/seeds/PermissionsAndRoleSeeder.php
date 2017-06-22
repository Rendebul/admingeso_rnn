<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsAndRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPermissions();
        $this->rolSuperAdmin();
        $this->rolAdmin();
    }

    private function createPermissions()
    {
        $permissions = [
            [
                'name' => 'admin_users',
                'label' => 'Administrar Usuarios'
            ],
            [
                'name' => 'admin_roles',
                'label' => 'Administrar Roles'
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate($permission);
        }
    }

    private function rolSuperAdmin()
    {
        $superAdmin = Role::firstOrCreate([
            'name' => 'super-admin',
            'label' => 'Super Administrador'
        ]);

        foreach (Permission::all() as $permission) {
            if (! $superAdmin->hasPermissionTo($permission)) {
                $superAdmin->givePermissionTo($permission->name);
            }
        }
    }

    private function rolAdmin()
    {
        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'label' => 'Administrador'
        ]);
    }
}
