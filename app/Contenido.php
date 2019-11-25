<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Contenido extends Model
{
    //Cruzamos la tabla de clientes con municipios y provincias.
    public static function destacado() {
        $listado = Contenido::
                join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.destacado', '=', true],
                    ['contenidos.publicado', '=', true]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen')
                ->get();
        return $listado;
    }
    
    public static function listado($tipocontenido_id) {
        $listado = Contenido::
                join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.tipocontenido_id', '=', $tipocontenido_id],
                    ['contenidos.publicado', '=', true]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen')
                ->get();
        return $listado;
    }
    
    public static function encontrar($id) {
        
        $elemento = Contenido::find($id);

        if($elemento->tipocontenido_id == 4){
            return Contenido::revista($id);
        }
        return Contenido::contenidoGenerico($id)[0];
    }
    
    public static function revista($id){
        $listado = Contenido::
                join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->leftjoin('enlaces', 'enlaces.revista_id', '=', 'contenidos.id')
                ->leftjoin('tipoenlaces', 'tipoenlaces.id', '=', 'enlaces.tipoenlace_id')
                ->where([
                    ['contenidos.id', '=', $id],
                    ['contenidos.publicado', '=', true]
                ])
                
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen','enlaces.link', 'tipoenlaces.texto AS tipoenlace')
                ->get();
        //Actualizamos el número de vista del contenido
        Contenido::actualizarVistas($id);

        return $listado;
    }
    
    public static function contenidoGenerico($id){
        $listado = Contenido::
                join('users', 'users.id', '=', 'contenidos.autor_id')
                ->join('tipocontenido', 'tipocontenido.id', '=', 'contenidos.tipocontenido_id')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->leftjoin('empresas as desarrolladora', 'desarrolladora.id', '=', 'contenidos.desarrolladora_id')
                ->leftjoin('empresas as distribuidora', 'distribuidora.id', '=', 'contenidos.distribuidora_id')
                ->where([
                    ['contenidos.id', '=', $id],
                    ['contenidos.publicado', '=', true]
                ])
                ->select('contenidos.*','users.name AS username','tipocontenido.texto AS categoria'
                        ,'imagenes.descripcion AS imagen','desarrolladora.nombre AS desarrolladora'
                        ,'distribuidora.nombre AS distribuidora')
                ->get();
        //Actualizamos el número de vista del contenido
        Contenido::actualizarVistas($id);

        return $listado;
    }

    public static function actualizarVistas($id) {
        $vistasActuales = Contenido::
                where('id', $id)
                ->select('contenidos.visto')
                ->get();
 
        $vistasActuales = $vistasActuales[0]->visto + 1;
        Contenido::
            where('id', $id)
            ->update(['visto' => $vistasActuales]);
    }
    
    public static function ultimoElemento($tipocontenido) {
        $listado = DB::table('contenidos')
                ->join('imagenes', 'imagenes.id', '=', 'contenidos.imagen_id')
                ->where([
                    ['contenidos.tipocontenido_id', '=', $tipocontenido],
                    ['contenidos.created_at', '>', Carbon::now()->subDays(60)],
                    ['contenidos.publicado', '=', true]
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
                    ['contenidos.created_at', '>', Carbon::now()->subDays(60)],
                    ['contenidos.publicado', '=', true]
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
                    ['contenidos.publicado', '=', true]
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
        return $this->hasOne(User::class)->withTimestamps();
    }
    
    public function enlace() {
        return $this->belongsToMany(Enlace::class)->withTimestamps();
    }
    
    public function etiquetas() {
        return $this->belongsToMany(Etiqueta::class)->withTimestamps();
    }
    
    public static function top($cantidad){
        return Contenido::orderby("visto")->take($cantidad)->get();
    }
}
