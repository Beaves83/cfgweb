<?php

use Illuminate\Database\Seeder;
use App\Tipocontenido;


class TipoContenidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Análisis';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Review';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Reportaje';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Revista';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Noticia';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Video';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Reportaje';
       $tipocontenido->save();
       
       $tipocontenido = new Tipocontenido();
       $tipocontenido->texto = 'Sorteo';
       $tipocontenido->save();
    }
}
