<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    public function contenidos() {
        return $this->belongsToMany(Contenido::class)->withTimestamps();
    }
}
