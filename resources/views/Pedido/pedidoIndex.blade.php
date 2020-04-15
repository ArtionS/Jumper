@extends('layouts.tema')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Listado de Pedidos
                    </div>

                    <div class="card-body">
{{--                        <a href="{{ action('LibroController@create')}}" class="btn btn-primary btn-ms">Nuevo Libro</a>--}}

                        <div class="table-responsive">

                            <table class="table table-bordered" width="100%" cellspacing="0">

                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Info</th>
                                </tr>
                                </thead>

{{--                                {{dd($pedidos)}}--}}

                                <tbody>
                                @foreach($pedidos as $pedido)

                                    <tr>
                                        <td>{{$pedido->id}}</td>
                                        <td>{{$pedido->fecha_entrega}}</td>
                                        <td><a href="{{ route('pedido.show' , $pedido->id) }}" class="btn btn-outline-info"> Info Pedido </a></td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
