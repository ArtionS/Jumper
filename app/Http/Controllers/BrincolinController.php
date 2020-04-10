<?php

namespace App\Http\Controllers;

use App\Brincolin;
use App\Categoria;
use Illuminate\Http\Request;

class BrincolinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brincolines = Brincolin::all();

        //dd($brincolines);

        return view('Brincolin/brincolinIndex' , compact('brincolines'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre' , 'id');

        return view('Brincolin/brincolinForm' , compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        dd($request->all());

        $request->validate([
            'brincolin'=>'required|max:255',
            'detalles'=>'required|max:255',
            'categoria_id' => 'required',
            'ancho'=>'required',
            'alto'=>'required',
            'largo'=>'required',
            'precio'=>'required',
            'disponibilidad'=>'required',
        ]);

        $brincolin = new Brincolin();
        $brincolin->brincolin = $request->brincolin;
        $brincolin->detalles = $request->detalles;
        $brincolin->categoria_id = $request->categoria_id;
        $brincolin->ancho = $request->ancho;
        $brincolin->alto = $request->alto;
        $brincolin->largo = $request->largo;
        $brincolin->precio = $request->precio;
        $brincolin->disponibilidad = $request->disponibilidad;

        $brincolin->save();

//        dd($brincolin);

        return redirect()->route('brincolin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brincolin  $brincolin
     * @return \Illuminate\Http\Response
     */
    public function show(Brincolin $brincolin)
    {
        return view('Brincolin/brincolinShow', compact('brincolin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brincolin  $brincolin
     * @return \Illuminate\Http\Response
     */
    public function edit(Brincolin $brincolin)
    {
        $categorias = Categoria::all()->pluck('nombre' , 'id');

        return view('Brincolin/brincolinForm', compact('brincolin' , 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brincolin  $brincolin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brincolin $brincolin)
    {
        //        dd($request->all());

        $request->validate([
            'brincolin'=>'required|max:255',
            'detalles'=>'required|max:255',
            'categoria_id' => 'required',
            'ancho'=>'required',
            'alto'=>'required',
            'largo'=>'required',
            'precio'=>'required',
            'disponibilidad'=>'required',
        ]);

        $brincolin->brincolin = $request->brincolin;
        $brincolin->detalles = $request->detalles;
        $brincolin->categoria_id = $request->categoria_id;
        $brincolin->ancho = $request->ancho;
        $brincolin->alto = $request->alto;
        $brincolin->largo = $request->largo;
        $brincolin->precio = $request->precio;
        $brincolin->disponibilidad = $request->disponibilidad;

        $brincolin->save();

//        dd($brincolin);

        return redirect()->route('brincolin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brincolin  $brincolin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brincolin $brincolin)
    {
        $brincolin ->delete();
        return redirect()->route('brincolin.index');
    }
}
