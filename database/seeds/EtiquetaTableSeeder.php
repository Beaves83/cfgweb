<?php

use Illuminate\Database\Seeder;
use App\Etiqueta;

class EtiquetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'playstation';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'xbox';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'nintendo';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'switch';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'ps4';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'microsoft';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'ubisoft';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'activision';
        $etiqueta->save();
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = 'blizard';
        $etiqueta->save();
    }
}
