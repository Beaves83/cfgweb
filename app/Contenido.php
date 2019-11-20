<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Contenido extends Model
{
    //Cruzamos la tabla de clientes con municipios y provincias.
    public static function destacado() {
        $listado = DB::table('contenidos')
                ->join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.destacado', '=', true]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen')
                ->get();
        return $listado;
    }
    
    public static function listado($tipocontenido_id) {
        $listado = DB::table('contenidos')
                ->join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.tipocontenido_id', '=', $tipocontenido_id]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen')
                ->get();
        return $listado;
    }
    
    public static function encontrar($id) {
        $listado = DB::table('contenidos')
                ->join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.id', '=', $id]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen')
                ->get();
        //Actualizamos el número de vista del contenido
        Contenido::actualizarVistas($id);

        return $listado;
    }
    
    public static function actualizarVistas($id) {
        $vistasActuales = DB::table('contenidos')
                ->where('id', $id)
                ->select('contenidos.visto')
                ->get();
 
        $vistasActuales = $vistasActuales[0]->visto + 1;
        DB::table('contenidos')
            ->where('id', $id)
            ->update(['visto' => $vistasActuales]);
    }
    
    public static function ultimoElemento($tipocontenido) {
        $listado = DB::table('contenidos')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.tipocontenido_id', '=', $tipocontenido],
                    ['contenidos.created_at', '>', Carbon::now()->subDays(60)]
                ])
                ->orderBy('id', 'desc')
                ->select('contenidos.*','imagenes.descripcion AS imagen')
                ->get();
        return $listado[0];
    }
    
    public static function masvisto($tipocontenido) {
        $listado = DB::table('contenidos')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.tipocontenido_id', '=', $tipocontenido],
                    ['contenidos.created_at', '>', Carbon::now()->subDays(60)]
                ])
                ->orderBy('visto', 'desc')
                ->select('contenidos.*','imagenes.descripcion AS imagen')
                ->get();
        return $listado[0];
    }
    
    public static function articulosmasvistos() {
        $listado = DB::table('contenidos')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.created_at', '>', Carbon::now()->subDays(60)],
                ])
                ->orderBy('visto', 'desc')
                ->select('contenidos.*','imagenes.descripcion AS imagen')
                ->take(5)
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
