<?php

namespace App\Http\Controllers;

use App\Brincolin;
use App\Categoria;
use App\Archivo;
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
                //dd($request->all());



        $request->validate([
            'brincolin'=>'required|max:255',
            'detalles'=>'required|max:255',
            'ancho'=>'required',
            'alto'=>'required',
            'largo'=>'required',
            'precio'=>'required',
            'disponibilidad'=>'required',
            'avatar'=>'required|image',
        ]);

        $brincolin = new Brincolin();

        $brincolin->avatar = $request->file('avatar')->store('public');

        $brincolin->brincolin = $request->brincolin;
        $brincolin->detalles = $request->detalles;
        $brincolin->ancho = $request->ancho;
        $brincolin->alto = $request->alto;
        $brincolin->largo = $request->largo;
        $brincolin->precio = $request->precio;
        $brincolin->disponibilidad = $request->disponibilidad;

        $brincolin->save();

//        dd($brincolin);
//  Relaciones de Brincolines con Categorias
//        Relación niño
        if ($request->cat1 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(1);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(1);
        }
//        Relacion niña
        if ($request->cat2 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(2);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(2);
        }
//        Relacion fantasia
        if ($request->cat3 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(3);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(3);
        }
//        Relacion pirata
        if ($request->cat4 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(4);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(4);
        }

        dd($brincolin);

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

//        dd($brincolin);

//        dd($request->file('avatar')->store('public'));

        if ($request->hasFile('avatar'))
        {
            $brincolin->avatar = $request->file('avatar')->store('public');
        }


//      return $request->all();



        $request->validate([
            'brincolin'=>'required|max:255',
            'detalles'=>'required|max:255',
            'ancho'=>'required',
            'alto'=>'required',
            'largo'=>'required',
            'precio'=>'required',
            'disponibilidad'=>'required',
            'avatar'=>'image',
        ]);

        $brincolin->brincolin = $request->brincolin;
        $brincolin->detalles = $request->detalles;
        $brincolin->ancho = $request->ancho;
        $brincolin->alto = $request->alto;
        $brincolin->largo = $request->largo;
        $brincolin->precio = $request->precio;
        $brincolin->disponibilidad = $request->disponibilidad;

        $brincolin->save();

//        dd($brincolin);

        //        Relación niño
        if ($request->cat1 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(1);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(1);
        }

//        Relacion niña
        if ($request->cat2 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(2);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(2);
        }

//        Relacion fantasia
        if ($request->cat3 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(3);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(3);
        }

//        Relacion pirata
        if ($request->cat4 == "1"){
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->attach(4);
            //dd($jump->categorias);
        }else{
            $jump = Brincolin::find($brincolin->id);
            $jump->categorias()->detach(4);
        }

        //dd($brincolin);

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
