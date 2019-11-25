<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    public static function cantidad(){
        return Contenido::where([
                    ['contenidos.tipocontenido_id', '=', 4],
                    ['contenidos.publicado', '=', true]
                ])
                ->get()->count();
    }
}
