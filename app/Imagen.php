<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public function contenido() {
        return $this->belongsToMany(Contenido::class)->withTimestamps();
    }
}
