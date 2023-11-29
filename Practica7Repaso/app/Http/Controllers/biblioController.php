<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFromLibros;

class biblioController extends Controller
{
    public function metodoInicio(){
        return view('Principal');
    }

    public function metodoRegistro(){
        return view('Registro');
    }

    public function guardarLibro(validadorFromLibros $req){
        /* return 'Se está guardando tu libro'; */
        return redirect('/Registro')->with('confirmacion', '¡Todo correcto: Libro '. $req->input('txtTitulo').' guardado!'); 
        /* echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req ->path();
        echo "</p>"; */
    }
}
