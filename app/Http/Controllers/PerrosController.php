<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerrosController extends Controller
{
    public function perros(){
        return view("Perros");
    }
}
