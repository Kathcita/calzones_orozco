<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedors = proveedor::all();
        return view('layouts.Registro.proveedor.index',compact('proveedors'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $newprovee = new proveedor();
        $newprovee->NombreEmpresa = $request->input('txtnombreEmpresa');
        $newprovee->NumProveedor = $request->input('txtnumProveedor');
        $newprovee->DireccionProveedor = $request->input('txtdireccionProveedor');
        $newprovee->CorreoProveedor = $request->input('txtcorreoEmail');
        $newprovee->Estado = $request->input('txtestado');

        $newprovee->save();

        return redirect()->route('proveedor.index');
    }
    
    public function show(proveedor $proveedor)
    {
        //
    }

    public function edit($id)
    {
        // $proveedors = proveedor::findOrFail($id);
        // return view('layouts.Registro.proveedor.indexedit',compact('proveedors'));
    }

    public function update(Request $request, proveedor $id)
    {
        $proveedors = proveedor::findOrFail($id);
        $proveedors->NombreEmpresa = $request->input('nombreEdit');
        $proveedors->NumProveedor = $request->input('numEdit');
        $proveedors->DireccionProveedor = $request->input('direcEdit');
        $proveedors->CorreoProveedor = $request->input('correoEdit');
        $proveedors->Estado = $request->input('estadoEdit');
        $proveedors->update();
        return redirect()->back();
      
    }

    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index');
    }
}
