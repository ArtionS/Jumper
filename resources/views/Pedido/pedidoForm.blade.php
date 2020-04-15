@extends('layouts.tema')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-4">

                    <div class="card-header">Nuevo Pedido</div>

                    <div class="card-body">

{{--                        <a href="{{ action('BrincolinController@index')}}" class="btn btn-primary btn-ms">Lista de Brincolines</a>--}}

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
                        @if(isset($pedido))

                            {!! Form::model($pedido, ['route' => ['pedido.update' , $pedido->id], 'method'=>'PATCH']) !!}

                        @else

                            {!! Form::open(['route' => 'pedido.store']) !!}
                        @endif

            {{--    Formulario  --}}
            {{--            --}}
                        <input type="hidden" name="usuario_id" value="{{\Auth::user()->id}}">

                        <br>

            {{--    Telefono del pedido  --}}
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono'); !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control', 'id'=> 'telefono', 'required', 'placeholder' => 'Telefono']) !!}
                        </div>

            {{--    Dirección del pedido   --}}
                        <div class="form-group">
                            {!! Form::label('direccion', 'Direccion'); !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control', 'id'=> 'direccion', 'required', 'placeholder' => 'Direccion de pedido']) !!}
                        </div>

            {{--    Fecha del pedido                    --}}
                        <div class="form-group">
                            <label for="fecha_entrega">Fecha Entrega</label>
                            {!! Form::date('fecha_entrega', null, ['class' => 'form-control']) !!}
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
