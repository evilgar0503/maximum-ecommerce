<?php

namespace App\Http\Controllers;

use App\Models\Avisos;
use Illuminate\Http\Request;

class AvisosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'asunto' => ['required', 'string', 'max:255'],
            'cuerpo' => ['required']
        ]);

        $aviso = new Avisos;
        $aviso->nombre = $request->nombre;
        $aviso->email = $request->email;
        $aviso->asunto = $request->asunto;
        $aviso->cuerpo = $request->cuerpo;
        $aviso->estado = 'pendiente';

        $aviso->save();

        return back()->with('success', 'El mensaje ha sido enviado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Avisos $avisos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avisos $avisos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avisos $avisos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avisos $avisos)
    {
        //
    }
}
