@extends('layouts.tema')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Listado de Brincolines
                    </div>

                    <div class="card-body">
{{--                        <a href="{{ action('LibroController@create')}}" class="btn btn-primary btn-ms">Nuevo Libro</a>--}}

                        <div class="table-responsive">

                            <table class="table table-bordered" width="100%" cellspacing="0">

                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Brincolin</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Info</th>
                                    <th scope="col">Add</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($brincolines as $brincolin)

                                    <tr>
                                        <td>{{$brincolin->id}}</td>
                                        <td>{{$brincolin->brincolin}} </td>
                                        <td>{{$brincolin->precio}}</td>
                                        <td><a href="{{ route('brincolin.show' , $brincolin->id) }}" class="btn btn-outline-info"> Info </a></td>
                                        <td><a href="{{url('addToCart/*.libro->id')}}" class="btn btn-outline-success"> Add </a></td>

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
