<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = cliente::all();
        return view('layouts.Registro.clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = new cliente();
        return view('layouts.Registro.clientes.index',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newclient = new cliente();
        $newclient->NombreCliente = $request->input('txtnombre');
        $newclient->ApellidoCliente = $request->input('txtapellido');
        $newclient->CedulaCliente = $request->input('txtcedula');
        $newclient->DireccionCliente = $request->input('txtdireccion');
        $newclient->NumCliente = $request->input('txttelefono');

        $newclient->save();
     
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $id)
    {
        $cliente = cliente::find($id); // Obtener el cliente por su ID

        return view('clientes.index', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
