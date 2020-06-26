<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
    protected $table = "language";
   protected $primaryKey = "language_id";
    public $timestamps = false; 

    public function peliculas(){
        return $this->hasMany('App\pelicula','language_id');
    }
}
