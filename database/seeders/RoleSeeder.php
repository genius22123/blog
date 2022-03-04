<?php

namespace Database\Seeders;

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
       $role1=Role::create(['name'=>'Admin']);
       $role2=Role::create(['name'=>'Blogger']);

       Permission::create(['name'=>'admin.home',
                            'description'=>'Ver el Dashboard'])->syncRoles([$role1,$role2]);

       Permission::create(['name'=>'admin.users.index',
                            'description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
       Permission::create(['name'=>'admin.users.edit',
                            'description'=>'asigar un rol o editar'])->syncRoles([$role1]);
   



       Permission::create(['name'=>'admin.categories.index',
                            'description'=>'Ver listado de Categorias'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=>'admin.categories.create',
                            'description'=>'Crear Categorias'])->syncRoles([$role1]);
       Permission::create(['name'=>'admin.categories.edit',
                            'description'=>'Editar categorias'])->syncRoles([$role1]);
       Permission::create(['name'=>'admin.categories.destroy',
                            'description'=>'Eliminar categorias'])->syncRoles([$role1]);

       Permission::create(['name'=>'admin.tags.index',
                            'description'=>'Ver listado de Etiquetas'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=>'admin.tags.create',
                            'description'=>'Cerar etiqeutas'])->syncRoles([$role1]);
       Permission::create(['name'=>'admin.tags.edit',
                            'description'=>'editar etiquetas'])->syncRoles([$role1]);
       Permission::create(['name'=>'admin.tags.destroy',
                            'description'=>'elimar etiquetas'])->syncRoles([$role1]);

       Permission::create(['name'=>'admin.posts.index',
                            'description'=>'Ver listado de Posts'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=>'admin.posts.create',
                            'description'=>'crear posts'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=>'admin.posts.edit',
                            'description'=>'Editar posts'])->syncRoles([$role1,$role2]);
       Permission::create(['name'=>'admin.posts.destroy',
                            'description'=>'Ellimnar posts'])->syncRoles([$role1,$role2]);

    
    }
}