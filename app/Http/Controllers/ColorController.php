<?php

namespace App\Http\Controllers;

use App\Models\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = color::all();
        return view('layouts.Registro.clasificacion.color.index',compact('colors'));
    }

    public function create()
    {
        $colors = new color();
        return view('layouts.Registro.clasificacion.color.index',compact('colors'));
    }

    public function store(Request $request)
    {
        $newcolor = new color();
        $newcolor->Color = $request->input('txtcolor');
        
        $newcolor->save();

        return redirect()->route('color.index');
    }

    public function show(color $color)
    {
        //
    }

    public function edit(color $color)
    {
        
    }

    public function update(Request $request, $id)
    {
        $colors = color::findOrdFail($id);
        $colors->Color = $request->input('txtcolorE');
        $colors->update();
        return redirect()->back();
    }

    public function destroy(color $color)
    {
        $color->delete();
        return redirect()->route('color.index');
    }
}
