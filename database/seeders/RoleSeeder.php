<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crea Roles
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'Docente']);
        $role3=Role::create(['name'=>'Estudiante']);

        //Crea Permisos
        Permission::create(['name'=>'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.update'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin'])->syncRoles([$role1]);
        Permission::create(['name'=>'docente'])->syncRoles([$role2]);
        Permission::create(['name'=>'estudiante'])->syncRoles([$role3]);
        // Permission::create(['name'=>'admin.niveles'])->syncRoles([$role1]);
        // Permission::create(['name'=>'admin.estados'])->syncRoles([$role1]);
        // Permission::create(['name'=>'estudiante'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'admin.usuarios_pendientes'])->syncRoles([$role1]);
        // Permission::create(['name'=>'subtemarios'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'temarios'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'actividades'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'admin.cualidades'])->syncRoles([$role1]);
        // Permission::create(['name'=>'reportes'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'admin.pendientes'])->syncRoles([$role1]);
        // Permission::create(['name'=>'listado'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'temario'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'view-temario'])->syncRoles([$role1,$role2]);
        // Permission::create(['name'=>'vista-estudiante'])->syncRoles([$role1,$role2,$role3]);
    }
}
