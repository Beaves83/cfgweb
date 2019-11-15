<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipocontenido extends Model
{
    protected $table = 'tipocontenido';
    
    public function contenido() {
        return $this->belongsToMany(Contenido::class)->withTimestamps();
    }
}
