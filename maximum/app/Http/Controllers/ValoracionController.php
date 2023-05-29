<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Valoracion;
use Illuminate\Http\Request;

class ValoracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $product = Producto::findOrFail($id);
        return view('ratings.rating')->with(['producto' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Creación de una nueva valoracion.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'valoracion' => ['required'],
            'comentario' => ['required']
        ]);

        $rate = new Valoracion();
        $rate->user_id = auth()->user()->id;
        $rate->producto_id = $request->producto_id;
        $rate->titulo = $request->titulo;
        $rate->valoracion = $request->valoracion;
        $rate->comentario = $request->comentario;
        $rate->save();
        return redirect()->route('product.view', $request->producto_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Valoracion $valoracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Valoracion $valoracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Valoracion $valoracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Valoracion $valoracion)
    {
        //
    }
}
