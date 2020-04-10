@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de Categoria</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Equipo</th>

                        </tr>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
