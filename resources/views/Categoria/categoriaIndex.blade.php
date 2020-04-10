@extends('layouts.tema')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    Lista de Categoria
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" width="100%" cellspacing="0">

                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Edit</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombre }}</td>
    {{--                                <td>--}}
    {{--                                    @foreach($equipo->users as $user)--}}
    {{--                                        {{ $user->name }} <br>--}}
    {{--                                    @endforeach--}}
    {{--                                </td>--}}
                                    <td>
                                        <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    </td>
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
