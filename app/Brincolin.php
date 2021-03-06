<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brincolin extends Model
{
    protected $table = 'brincolines';
    public $timestamps = false;

    protected $fillable = [
        'brincolin', 'detalles', 'ancho', 'alto', 'largo', 'precio', 'disponibilidad'
    ];

    protected $guarded = [
        'id'
    ];


    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }

//    public function archivos()
//    {
//        return $this->morphMany(Archivo::class);
//    }

}
