<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CJuego extends Controller
{
    public function MetodoFormulario (Request $request) {
        $validated = $request->validate([
            'txtNombre' => 'required|unique:posts|min:5',
            'txtFecha' => 'required',
            'txtVendidos' => 'required|unique:posts|max:7',
        ]);
        return view('Formulario')->with('validated', 'El videojuego'.$request->input('txtNombre').' se ha guardado correctamente!');
    }
}

