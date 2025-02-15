<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        $adminRole       = Role::firstOrCreate(['name' => 'administrador']);
        $investigadorRole = Role::firstOrCreate(['name' => 'investigador']);
        $usuarioRole     = Role::firstOrCreate(['name' => 'usuario']);

        // Crear usuario administrador por defecto
        $admin = User::firstOrCreate(
            ['email' => 'sheremypavon12@gmail.com'],
            [
                'name'     => 'Administrador',
                'password' => bcrypt('123456789') // Reemplaza con una contraseña segura
            ]
        );

        // Asignar rol de administrador
        $admin->assignRole($adminRole);
    }
}
