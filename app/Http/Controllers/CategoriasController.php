<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    function inicio() {
        $categorias = Categoria::orderby('nombre')->paginate(30);
        return view('admin.categorias', compact('categorias'));
    }

    function agregar(Request $request) {
        $request->validate(['categoria' => 'string|required|min:3']);

        $categoria = new Categoria();
        $categoria->nombre = $request->categoria;
        $categoria->save();

        return back();
    }
}
