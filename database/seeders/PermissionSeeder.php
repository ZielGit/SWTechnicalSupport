<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Modelo creado por laravel-permission
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artisan::call('cache:clear');
        Permission::create(['name' => 'dashboard', 'description' => 'Ver panel'])->syncRoles('Administrador');

        Permission::create(['name' => 'users.index', 'description' => 'Ver lista de usuarios'])->syncRoles('Administrador');
        Permission::create(['name' => 'users.create', 'description' => 'Crear usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'users.edit', 'description' => 'Editar usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'users.show', 'description' => 'Ver detalles de usuario'])->syncRoles('Administrador');
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar usuario'])->syncRoles('Administrador');
    }
}
