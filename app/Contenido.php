<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    public function tipocontenido() {
        return $this->belongsToMany(Tipocontenido::class)->withTimestamps();
    }
    
    public function imagen() {
        return $this->belongsToMany(Imagen::class)->withTimestamps();
    }
    
    public function user() {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }
    
    public function enlace() {
        return $this->belongsToMany(Enlace::class)->withTimestamps();
    }
}
