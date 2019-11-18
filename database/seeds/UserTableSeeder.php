<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos usuario con el perfil de Administrador
        $user = new User();
        $user->name = 'Administrador';
        $user->password = Hash::make('admin@email.es');
        $user->email = 'admin@email.es';
        $user->email_verified_at = new \DateTime();
        $user->created_at = new \DateTime();
        $user->updated_at = new \DateTime();      
        $user->save();    
        $user->roles()->attach(Role::where('name', 'admin')->first());
        
        //Creamos usuario con el perfil de User
        $user = new User();
        $user->name = 'Usuario de pruebas';
        $user->password = Hash::make('usuario@email.es');
        $user->email = 'usuario@email.es';
        $user->email_verified_at = new \DateTime();
        $user->created_at = new \DateTime();
        $user->updated_at = new \DateTime();      
        $user->save();    
        $user->roles()->attach(Role::where('name', 'user')->first());
        
        //Creamos usuario con el perfil de Gestor
        $user = new User();
        $user->name = 'Gestor de pruebas';
        $user->password = Hash::make('gestor@email.es');
        $user->email = 'gestor@email.es';
        $user->email_verified_at = new \DateTime();
        $user->created_at = new \DateTime();
        $user->updated_at = new \DateTime();      
        $user->save();    
        $user->roles()->attach(Role::where('name', 'gestor')->first());
    }
}
