<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Municipio;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $municipios = Municipio::select('id', 'nombre', 'fecha')->get();

        $catalogo = Catalogo::all();
        return view('catalogo.index',  
        [
            'municipio' => $municipios,
            'catalogo' => $catalogo,
        ]);
        /* return view('catalogo.index', compact('catalogos')); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Catalogo $catalogo)
    {
        $municipios = Municipio::select('id', 'nombre', 'fecha')->get();

        return view('catalogo.create',  
        [
            'municipio' => $municipios,
            'catalogo' => $catalogo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombre' => 'required',
            'fecha' => 'required',
        ]);

        Catalogo::create([
           
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
        ]);

        return redirect('/catalogo');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogo $catalogo)
    {
        $municipios = Municipio::select('id', 'nombre', 'fecha')->get();

        return view('catalogo.edit',  
        [
            'municipio' => $municipios,
            'catalogo' => $catalogo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogo $catalogo)
    {
        $catalogo->update($request->all());

        return redirect('/catalogo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogo $catalogo)
    {
        $catalogo->delete();

        return back();
    }
}
