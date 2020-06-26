<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
    //atributos de la tabla
    protected $table="category";
    protected $primaryKey = "category_id";
    public $timestamps = false;
    //metodo que relaciona la categoria con las peliculas
    //con las peliculas
        public function pelicula(){
            //muchas categorias tienen muchas peliclas y a la inversa.
            return $this->belongsToMany('App\pelicula' , 'film_category' , 'category_id' , 'film_id');
        }   
}