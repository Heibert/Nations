<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //Coloca la tabla a la que te conectaras
    protected $table = "regions";
    //La clave primaria de la tabla
    protected $primaryKey = "region_id";
    //omitir verificacion de campos
    public $timestamps = false;
    use HasFactory;
    public function paises(){
        return $this->hasMany(Country::class,'region_id');
    }
    //Region y continente
    public function continente(){
        return $this->belongsTo(Continent::class,'continent_id');
    }
}
