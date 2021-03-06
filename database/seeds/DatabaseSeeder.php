<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(TipoContenidosTableSeeder::class);
        $this->call(TipoEnlacesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(EtiquetaTableSeeder::class);
    }
}
