<?php

namespace App\Http\Controllers;

use App\pelicula;
use Illuminate\Http\Request;


class peliculaController extends Controller
{
    //mostrar el catalogo de peliculas

    public function index(){
        //instrucciones a ejecutar

        //selecionar datos atravez del modelo
        $pelicula = pelicula::paginate(20);
        //Invocar una vista e ingresar a la vista el listado de categorias
        return view("peliculas.index")->with("pelicula",$pelicula);

    }
}
