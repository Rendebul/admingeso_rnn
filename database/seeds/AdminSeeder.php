<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::firstOrCreate([
            'name' => 'super admin',
            'email' => 'super@admin.cl',
            'password' => '123',
            'cargo' => 'Super Administrar',
            'telefono' => '123123123'
        ]);

        if (! $superAdmin->hasRole('super-admin')) {
            $superAdmin->assignRole('super-admin');
        }

        $admin = User::firstOrCreate([
            'name' => 'admin',
            'email' => 'admin@admin.cl',
            'password' => '123',
            'cargo' => 'Administrar',
            'telefono' => '22222222'
        ]);

        if (! $admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }
    }
}
