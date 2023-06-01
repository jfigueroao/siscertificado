<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LicController extends Controller
{
    
    function index(){
        return view('licencias/regusuario');
    }

    function visualizar(){
        return view('licencias/visualizar');
    }

}
