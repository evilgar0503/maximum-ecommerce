<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias =  Noticia::all();
        return view('blog.blog')->with('noticias', $noticias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {
        $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'cuerpo' => ['required', 'string'],
            'imagen' => ['required', 'file']
        ]);

        $noticia = new Noticia;
        $noticia->titulo = $request->titulo;
        $noticia->cuerpo = $request->cuerpo;

        $nameImg = time()."-".$request->file('imagen')->getClientOriginalName();
        $ruta = "img/".$nameImg;
        $request->file('imagen')->storeAs('public/img', $nameImg);
        $noticia->ruta_imagen = $ruta;
        $noticia->save();
        return redirect()->route('blog')->with('success', 'La noticia ha sido creada correctamente.');
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
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
