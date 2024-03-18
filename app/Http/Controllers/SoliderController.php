<?php

namespace App\Http\Controllers;
use App\Models\Solider;
use Illuminate\Http\Request;

class SoliderController extends Controller
{
    function create() {
        return view('FormuSoldado');
    }
    function store(Request $request) {
        $soldado = new Solider();
        $soldado->nombres = $request->nombres;
        $soldado->apellidos = $request->apellidos;
        $soldado->grado = $request->grado;
        $soldado->save();
        return "";
    }
}
