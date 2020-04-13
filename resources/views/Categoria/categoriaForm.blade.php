@extends('layouts.tema')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-4">

                    <div class="card-header">Captura Categoria</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

            {{--    Inicio del Form viendo si es nuevo o edicion                   --}}
                        @if(isset($categoria))
                            {!! Form::model($categoria , ['route' => ['categoria.update' , $categoria->id], 'method'=>'PATCH']) !!}
                        @else
{{--                            {!! Form::open(['route' => 'categoria.store']) !!}--}}
                        @endif

            {{--    Formulario  --}}
                        <br>
            {{--    Texto del nombre del categoria  --}}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre'); !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'id'=> 'nombre', 'required']) !!}
                        </div>

                        <br>

            {{--    Boton de submit del Formulario                    --}}
                        {!! Form::submit('Guardar' , ['class'=>'btn btn-outline-primary']) !!}

            {{--    Final del Form                    --}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
