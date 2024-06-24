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
     */
    public function run(): void
    {
        //creamos dos roles
        $role_admin = Role::create(['name' => 'admin']);
        $role_registrador = Role::create(['name' => 'registrador']);
    
        //creamos los permisos
        $permission_create_role = Permission::create(['name' => 'create roles']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update roles']);
        $permission_delete_role = Permission::create(['name' => 'delete roles']);
        
        $permission_create_solicitud = Permission::create(['name' => 'create solicitudes']);
        $permission_read_solicitud = Permission::create(['name' => 'read solicitudes']);
        $permission_update_solicitud = Permission::create(['name' => 'update solicitudes']);
        $permission_delete_solicitud = Permission::create(['name' => 'delete solicitudes']);

        $permission_create_salon = Permission::create(['name' => 'create salones']);
        $permission_read_salon = Permission::create(['name' => 'read salones']);
        $permission_update_salon = Permission::create(['name' => 'update salones']);
        $permission_delete_salon = Permission::create(['name' => 'delete salones']);
    
        //asignamos los permisos utilizando un array
        $permissions_admin = [$permission_create_role, $permission_read_role, $permission_update_role, $permission_delete_role,
                                $permission_create_solicitud, $permission_read_solicitud, $permission_update_solicitud, $permission_delete_solicitud,
                                $permission_create_salon, $permission_read_salon, $permission_update_salon, $permission_delete_salon];
        $permissions_registrador = [$permission_create_solicitud, $permission_read_solicitud, $permission_update_solicitud, $permission_delete_solicitud];
    
        //Sincronizamos los permisos con el role_admin mediante el metodo syncPermissions de Spatia
        $role_admin->syncPermissions($permissions_admin);
        $role_registrador->syncPermissions($permissions_registrador);
    }

}
