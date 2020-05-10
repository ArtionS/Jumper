@extends('layouts.tema')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Descripción Del Pedido </div>

                    <div class="card-body">

{{--                        <a href="{{ action('BrincolinController@index')}}" class="btn btn-primary btn-ms">Lista de Brincolines</a>--}}

                        <a href="{{ route('brincolin.edit' , $brincolin->id)}}" class="btn btn-warning btn-ms">Editar Brincolin</a>

                        <hr>

                        <form action="{{route('brincolin.destroy' , $brincolin->id)}} " method="POST">
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
                                <td>{{$brincolin->id}}</td>
                            </tr>

                            <tr>
                                <td>Brincolin</td>
                                <td>{{$brincolin->brincolin}}</td>
                            </tr>
                            <tr>
                                <td>Detalles</td>
                                <td>{{$brincolin->detalles}}</td>
                            </tr>
                            <tr>
                                <td>Ancho</td>
                                <td>{{$brincolin->ancho}} m.</td>
                            </tr>
                            <tr>
                                <td>Alto</td>
                                <td>{{$brincolin->alto}} m.</td>
                            </tr>
                            <tr>
                                <td>Largo</td>
                                <td>{{$brincolin->largo}} m.</td>
                            </tr>
                            <tr>
                                <td>Precio</td>
                                <td>${{$brincolin->precio}}</td>
                            </tr>
                            <tr>
                                <td>Disponibilidad</td>
                                <td>{{$brincolin->disponibilidad}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
