<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class LocationController extends Controller
{
    public function jsoncities($id_pais){
        $cities = Country::find($id_pais)->city()->get()->tojson();
        return $cities;
    }
}
