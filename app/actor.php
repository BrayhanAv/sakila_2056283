<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = "actor";
    protected $primaryKey = "actor_id";
    public $timestamps = false; 

    public function peliculas(){
        return $this->belongsToMany("App\pelicula","film_actor","actor_id","film_id");
    }
}
