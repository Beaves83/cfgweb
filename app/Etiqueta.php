<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Etiqueta;

class Etiqueta extends Model
{
    public function contenidos() {
        return $this->belongsToMany(Contenido::class)->withTimestamps();
    }
    
    public static function top($cantidad){
        return Etiqueta::
                join('etiqueta_contenido', 'etiqueta_contenido.etiqueta_id', '=', 'etiquetas.id')
                //-->select(sum('etiqueta_contenido.id'),'etiqueta.*')
                //->groupby("etiqueta_id")
                //->orderby("cantidad","desc")
                ->take($cantidad)->get();
    }
}
