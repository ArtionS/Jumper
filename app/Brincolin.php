<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brincolin extends Model
{

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }
}
