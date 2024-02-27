<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    function inicio() {
        $empresas = Empresa::orderby('nombre')->paginate(30);
        return view('admin.empresas.inicio', compact('empresas'));
    }
}
