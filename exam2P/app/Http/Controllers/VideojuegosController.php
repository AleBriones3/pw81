<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    public function MetodoFormulario (Request $req) {
        $validated = $req->validate([
            'txtNombre' => 'required|min:5',
            'txtFecha' => 'required',
            'txtVendidos' => 'required|max:7',
        ]);
    }
}
