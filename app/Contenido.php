<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contenido extends Model
{
    //Cruzamos la tabla de clientes con municipios y provincias.
    public static function destacado() {
        $listado = DB::table('contenidos')
                ->join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->where([
                    ['contenidos.destacado', '=', true]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria')
                ->get();

        return $listado;
    }
    
    public static function listado($tipocontenido) {
        $listado = DB::table('contenidos')
                ->join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->where([
                    ['contenidos.tipocontenido_id', '=', $tipocontenido]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria')
                ->get();

        return $listado;
    }
      
    public function tipocontenido() {
        return $this->belongsToMany(Tipocontenido::class)->withTimestamps();
    }
    
    public function imagen() {
        return $this->belongsToMany(Imagen::class)->withTimestamps();
    }
    
    public function user() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    
    public function enlace() {
        return $this->belongsToMany(Enlace::class)->withTimestamps();
    }
    
    public function etiquetas() {
        return $this->belongsToMany(Etiqueta::class)->withTimestamps();
    }
}
