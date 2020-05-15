<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brincolin extends Model
{
    protected $table = 'brincolines';
    public $timestamps = false;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }
}
