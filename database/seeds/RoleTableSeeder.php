<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $role = new Role();
       $role->name = 'admin';
       $role->description = 'Administrador';
       $role->save();
       
       $role = new Role();
       $role->name = 'user';
       $role->description = 'Usuario estandar';
       $role->save();
       
       $role = new Role();
       $role->name = 'gestor';
       $role->description = 'Gestor de contenido';
       $role->save();

    }
}
