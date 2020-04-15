<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        //dd($pedidos);
        return view('Pedido/pedidoIndex' , compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->pluck('name' , 'id');

        return view('Pedido/pedidoForm' , compact('users'));
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
            'usuario_id' => 'required',
            'telefono'=>'required|max:13|min:8',
            'direccion'=>'required|max:255',
            'fecha_entrega'=>'required',

        ]);

        $pedido = new Pedido();
        $pedido->usuario_id = $request->usuario_id;
        $pedido->telefono = $request->telefono;
        $pedido->direccion = $request->direccion;
        $pedido->fecha_entrega = $request->fecha_entrega;

        $pedido->save();

//        dd($pedido);

        return redirect()->route('brincolin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('Pedido/pedidoShow', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        $users = User::all()->pluck('name' , 'id');

        return view('Pedido/pedidoForm' , compact('pedido' , 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'usuario_id' => 'required',
            'telefono'=>'required|max:13|min:8',
            'direccion'=>'required|max:255',
            'fecha_entrega'=>'required',

        ]);

        $pedido->usuario_id = $request->usuario_id;
        $pedido->telefono = $request->telefono;
        $pedido->direccion = $request->direccion;
        $pedido->fecha_entrega = $request->fecha_entrega;

        $pedido->save();

//        dd($pedido);

        return redirect()->route('pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedido.index');
    }
}
