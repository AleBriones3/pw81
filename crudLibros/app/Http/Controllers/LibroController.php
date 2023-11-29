<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * HOME
     */
    public function index()
    {
        $allbooks= libro::all();
        return view('libros.index', compact('allbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Insert 
     */
    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo=$request->txttit;
        $addLibro->autor=$request->txtaut;
        $addLibro->paginas=$request->txtpag;
        $addLibro->anio=$request->txtan;
        $addLibro->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $upLibro= libro::find($id);
        $upLibro->titulo=$request->txttit;
        $upLibro->autor=$request->txtaut;
        $upLibro->paginas=$request->txtpag;
        $upLibro->anio=$request->txtan;
        $upLibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delLibro= libro::find($id);
        $delLibro->delete();

        return redirect()->back();
    }
}
