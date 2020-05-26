<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{

    public $timestamps = false;

    public function brincolin()
    {
        return $this->belongsTo(Brincolin::class);
    }


//    public function origen()
//    {
//        return $this->morphTo();
//    }
}
