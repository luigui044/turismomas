<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TPaise;
class HomeController extends Controller
{
    function index () {
        $paises = TPaise::all();
        return view('welcome', compact('paises'));
    }

    function elsalvador(){
        return view('paises.sv');
    }
}
