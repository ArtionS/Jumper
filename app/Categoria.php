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

    public function getNombreAttribute($value)
    {
        return strtolower($value);
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucwords($value);
    }

    public function brincolines (){
        return $this->belongsToMany(Brincolin::class)->withTimestamps();
    }

    public function archivos()
    {
        return $this->morphMany(Archivo::class);
    }
}
