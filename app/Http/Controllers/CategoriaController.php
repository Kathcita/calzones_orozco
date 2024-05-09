<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = categoria::all();
        return view('layouts.Registro.clasificacion.categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = new categoria();
        return view('layouts.Registro.clasificacion.categoria.index', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newcate = new categoria();
        $newcate->Categoria = $request->input('txtcategoria');

        $newcate->save();

        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $categorium)
    {
        $categorias = categoria::findOrdFail($categorium);
        $categorias->Categoria = $request->input('txtcategoriaE');
        $categorias->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categorium)
    {
        $categorium->delete();
        return redirect()->route('categoria.index');
    }
}