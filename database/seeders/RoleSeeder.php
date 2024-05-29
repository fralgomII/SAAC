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
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Tesorero']);
        $role3 = Role::create(['name' => 'Asociado']);
        $role4 = Role::create(['name' => 'Asesor Comercial']);

        $permission = Permission::create(['name' => 'home'])->syncRoles([$role1,$role2,$role3,$role4]);

        $permission = Permission::create(['name' => 'ver-asociados'])->syncRoles([$role1,$role2,$role2]);
        $permission = Permission::create(['name' => 'crear-asociados'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'editar-asociados'])->syncRoles([$role1,$role2,$role2]);
        $permission = Permission::create(['name' => 'borrar-asociados'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-recaudos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'crear-recaudos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'editar-recaudos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'borrar-recaudos'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-lineaaportes'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'crear-lineaaportes'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'editar-lineaaportes'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'borrar-lineaaportes'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-estado'])->syncRoles([$role1,$role2,$role2]);

        $permission = Permission::create(['name' => 'ver-lineacreditos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'crear-lineacreditos'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'editar-lineacreditos'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'borrar-lineacreditos'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'ver-creditos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'crear-creditos'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'editar-creditos'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'borrar-creditos'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'ver-periodos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'crear-periodos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'editar-periodos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'borrar-periodos'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-egresos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'crear-egresos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'editar-egresos'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'borrar-egresos'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-cierrediario'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'ver-cierreperiodo'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'ver-liquidarperiodo'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'borrar-abonos'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-simulador'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-liquidador'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-configuracion'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'editar-configuracion'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-cuadrediario'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'ver-roles'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'crear-roles'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'editar-roles'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'borrar-roles'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'ver-usuarios'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'crear-usuarios'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'editar-usuarios'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'borrar-usuarios'])->syncRoles([$role1]);
    }
}
