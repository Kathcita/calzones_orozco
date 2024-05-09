<?php

namespace App\Http\Controllers;

use App\Models\talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tallas = talla::all();
        return view('layouts.Registro.clasificacion.talla.index',compact('tallas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tallas = new talla();
        return view('layouts.Registro.clasificacion.talla.index',compact('tallas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newtalla = new talla();
        $newtalla->Talla = $request->input('txttalla');
        
        $newtalla->save();

        return redirect()->route('talla.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(talla $talla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(talla $talla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tallas = talla::findOrdFail($id);
        $tallas->talla = $request->input('txttallaE');
        $tallas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(talla $talla)
    {
        $talla->delete();
        return redirect()->route('talla.index');
    }
}
