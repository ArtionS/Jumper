@extends('layouts.tema')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Descripción Del Brincolin </div>

                    <div class="card-body">

                        <a href="{{ action('BrincolinController@index')}}" class="btn btn-primary btn-ms">Lista de Brincolines</a>

                        <a href="{{ route('pedido.edit' , $pedido->id)}}" class="btn btn-warning btn-ms">Editar Pedido</a>

                        <hr>

                        <form action="{{route('pedido.destroy' , $pedido->id)}} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>

                        </form>

                        <br>
                        <br>

                        <table class="table">
                            <thead class="thead-dark">
                            </thead>
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$pedido->id}}</td>
                            </tr>
                            <tr>
                                <td>ID_Usuario</td>
                                <td>{{$pedido->usuario_id}}</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td>ID_Usuario</td>--}}
{{--                                <td>{{$pedido->user->name}}</td>--}}
{{--                            </tr>--}}
                            <tr>
                                <td>Teléfono</td>
                                <td>{{$pedido->telefono}}</td>
                            </tr>
                            <tr>
                                <td>Dirección</td>
                                <td>{{$pedido->direccion}}</td>
                            </tr>
                            <tr>
                                <td>Fecha de Entrega</td>
                                <td>{{$pedido->fecha_entrega}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
