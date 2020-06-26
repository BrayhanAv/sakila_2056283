<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
   protected $table = "film";
   protected $primaryKey = "film_id";
    public $timestamps = false; 

    public function Categoria(){
        return $this->belongsToMany('App\Categoria' , 'film_category' , 'film_id' , 'category_id');
    }
    
    public function idioma(){
        //retornamos el inverso de la relacion
        return $this->belongsTo("App\idioma","language_id");
    }

    public function actores(){
        return $this->belongsToMany('App\actor' , 'film_actor' , 'film_id' , 'actor_id');
    }
}
