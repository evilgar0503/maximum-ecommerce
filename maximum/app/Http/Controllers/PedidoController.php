<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function review(Request $request)
    {
        $rules = [
            'nombreEnv' => 'required|string|max:255',
            'apellidosEnv' => 'required|string|max:255',
            'dniEnv' => 'required|string|size:9|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
            'direccionEnv' => 'required|string|max:255',
            'cpEnv' => 'required|string|max:10',
            'ciudadEnv' => 'required|string|max:255',
            'provinciaEnv' => 'required|string|max:255',
            'paisEnv' => 'required|string|max:255',
            'telefonoEnv' => 'required|string|max:20',
            'notaEnv' => 'nullable|longText',
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no debe superar :max caracteres.',
            'size' => 'El campo :attribute debe tener una longitud de :size caracteres.',
            'regex' => 'El formato del campo :attribute es inválido.',
        ];

        if (!$request->sameData) {
            $rules = array_merge($rules, [
                'nombreFac' => 'required|string|max:255',
                'apellidosFac' => 'required|string|max:255',
                'dniFac' => 'required|string|size:9|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
                'direccionFac' => 'required|string|max:255',
                'cpFac' => 'required|string|max:10',
                'ciudadFac' => 'required|string|max:255',
                'provinciaFac' => 'required|string|max:255',
                'paisFac' => 'required|string|max:255',
                'telefonoFac' => 'required|string|max:20',
            ]);
        }

        $request->validate($rules, $messages);

        return view('shop.checkout')->with('status', 'Verificado correctamente.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
