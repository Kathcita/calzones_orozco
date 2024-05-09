<?php

namespace App\Http\Controllers;

use App\Models\marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = marca::all();
        return view('layouts.Registro.clasificacion.marca.index',compact('marcas'));
    }

    public function create()
    {
        $marcas = new marca();
        return view('layouts.Registro.clasificacion.marca.index',compact('marcas'));
    }

    public function store(Request $request)
    {
        $newmarca = new marca();
        $newmarca->Marca = $request->input('txtmarca');
        
        $newmarca->save();

        return redirect()->route('marca.index');
    }

    public function show(marca $marca)
    {
        //
    }

    public function edit(marca $marca)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $marcas = marca::findOrdFail($id);
        $marcas->marca = $request->input('txtmarca');
        $marcas->update();
        return redirect()->back();
    }

    public function destroy(marca $marca)
    {
        $marca->delete();
        return redirect()->route('marca.index');
    }
}