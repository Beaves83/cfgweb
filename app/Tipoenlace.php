<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoenlace extends Model
{
    protected $table = 'tipoenlaces';
    
    public function enlace() {
        return $this->belongsToMany(Enlace::class)->withTimestamps();
    }
}
