<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];

    protected $guarded = [
        'id'
    ];

    public function brincolines (){
        return $this->belongsToMany(Brincolin::class)->withTimestamps();
    }
}
