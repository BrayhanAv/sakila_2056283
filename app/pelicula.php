<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
   protected $table = "film";
   protected $primaryKey = "film_id";
    public $timestamps = false; 
}
