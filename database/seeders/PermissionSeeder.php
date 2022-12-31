<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        $role0 = Role::create(['name' => 'Superadmin']);
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Colaborador']);
        $role3 = Role::create(['name' => 'Educador']);
        $role4 = Role::create(['name' => 'Auxiliar']);

        //users y roles
        Permission::firstOrCreate(['name' => 'ver-rol'])->assignRole($role0);
        Permission::firstOrCreate(['name' => 'crear-rol'])->assignRole($role0);
        Permission::firstOrCreate(['name' => 'editar-rol'])->assignRole($role0);
        Permission::firstOrCreate(['name' => 'borrar-rol'])->assignRole($role0);

        //personal
        Permission::firstOrCreate(['name' => 'ver-personal'])->syncRoles([$role1, $role2]);
        Permission::firstOrCreate(['name' => 'crear-personal'])->syncRoles([$role0, $role1]);
        Permission::firstOrCreate(['name' => 'editar-personal'])->syncRoles([$role0, $role1, $role2]);
        Permission::firstOrCreate(['name' => 'borrar-personal'])->syncRoles([$role0, $role1]);

        //infantes
        Permission::firstOrCreate(['name' => 'ver-infante'])->syncRoles([$role1, $role2]);
        Permission::firstOrCreate(['name' => 'crear-infante'])->syncRoles([$role0, $role1]);
        Permission::firstOrCreate(['name' => 'editar-infante'])->syncRoles([$role0, $role1, $role2]);
        Permission::firstOrCreate(['name' => 'borrar-infante'])->syncRoles([$role0, $role1]);

        //evaluacion
        Permission::firstOrCreate(['name' => 'ver-evaluacion'])->syncRoles([$role1, $role2, $role4]);
        Permission::firstOrCreate(['name' => 'crear-evaluacion'])->syncRoles([$role0, $role3]);
        Permission::firstOrCreate(['name' => 'editar-evaluacion'])->syncRoles([$role0, $role3, $role4]);
        Permission::firstOrCreate(['name' => 'borrar-evaluacion'])->syncRoles([$role0]);
    }
}
