<?php

namespace App\Http\Controllers;
use App\Models\Barracks;
use Illuminate\Http\Request;

class BarracksController extends Controller
{
    function create() {
        return view('FormuCuartel');
    }
    function store(Request $request) {
        $cuartel = new Barracks();
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;
        $cuartel->save();
        return "";
    }
}
