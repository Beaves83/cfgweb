<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    public function tipoenlace() {
        return $this->belongsToMany(Tipoenlace::class)->withTimestamps();
    }
}
