<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatosController extends Controller
{
    public function gatos(){
        return view('Gatos');
    }
    
}