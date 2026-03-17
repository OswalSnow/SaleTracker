<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('oferta.index')
        ->with([
            'ofertas' => Oferta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oferta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5|max:50',
            'vigencia' => 'required|date|after:today',
            'tienda' => 'required|min:5',
            'precio_original' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|min:0'
        ]);

        $oferta = new Oferta();
        $oferta->titulo = $request->titulo;
        $oferta->vigencia = $request->vigencia;
        $oferta->tienda = $request->tienda;
        $oferta->precio_original = $request->precio_original;
        $oferta->precio_descuento = $request->precio_descuento;
        $oferta->save();

        return redirect()->route('ofertas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
