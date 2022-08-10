<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "continents";
    //La clave primaria de la tabla
    protected $primaryKey = "continent_id";
    //omitir verificacion de campos
    public $timestamps = false;
    use HasFactory;
    public function regiones(){
        return $this->hasMany(Region::class,'continent_id');
    }
    public function paises(){
        return $this->hasManyThrough(
            Country::class,
            Region::class,
            'continent_id',
            'region_id',
            'continent_id',
            'region_id'
        );
    }
}
