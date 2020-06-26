<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Customer;
use App\Address;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\make;
use Illuminate\Validation\Validator as ValidationValidator;
class ClienteController extends Controller
{
    public function create(){
        // Traer los paises
        $paises = Country::all();
        return view('clientes.new')->with("Paises",$paises);
    }

    public function store(Request $r){
        var_dump($r->all());

        //crear una direccion
        $d = new Address();
        //captura de texto
        $d->address = $r->input("Dreccion_cliente"); 
        //id de la ciudad
        $d->city_id = $r->input("ciudad_cliente"); 
        //guardar la direccion
        $d->save();

        //echo $d->address_id;

        //crear el custumer
        $c = new Customer();

        $c->first_name = $r->input("nombre_cliente"); 
        $c->last_name = $r->input("apellido_cliente");
        $c->email = $r->input("email_cliente"); 
        //clave foranea de la tienda quedara en null
        $c->address_id = $d->address_id;

        if($r->input("Estado_cliente") == null){
            $c->active = 0;
        }else{
            $c->active = 1;
        }
        $c->save();

        echo ("");
    }
}
