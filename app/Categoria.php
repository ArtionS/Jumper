<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    public function brincolines (){
        return $this->belongsToMany(Brincolin::class);
    }
}
