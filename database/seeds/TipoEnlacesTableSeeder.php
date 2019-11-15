<?php

use Illuminate\Database\Seeder;
use App\Tipoenlace;

class TipoEnlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tipoenlace = new Tipoenlace();
       $tipoenlace->texto = 'Online';
       $tipoenlace->save();
       
       $tipoenlace = new Tipoenlace();
       $tipoenlace->texto = 'Versión escritorio';
       $tipoenlace->save();
       
       $tipoenlace = new Tipoenlace();
       $tipoenlace->texto = 'Versión smartphone';
       $tipoenlace->save();
    }
}
