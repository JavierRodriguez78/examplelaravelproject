<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{

    public static function index(){
        return "Hola Index Controller";
    }
}
