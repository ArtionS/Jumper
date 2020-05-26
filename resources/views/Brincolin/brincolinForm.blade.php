@extends('layouts.tema')

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="card mb-4">

                    <div class="card-header">Nuevo Brincolin</div>

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
                        @if(isset($brincolin))

                            {!! Form::model($brincolin, ['route' => ['brincolin.update' , $brincolin->id], 'method'=>'PATCH' , 'enctype' => 'multipart/form-data']) !!}

                        @else

                            {!! Form::open(['route' => 'brincolin.store' , 'enctype' => 'multipart/form-data']) !!}
                        @endif

            {{--    Formulario  --}}

                        <br>

{{--                        <img src=" /storage/{{ $brincolin->avatar }}" width="300">--}}

                        @if(isset($brincolin))
                            <img src="{{ Storage::url($brincolin->avatar) }}" width="300">
                        @endif


                        <label for="avatar">
                            <input type="file" name="avatar">

                            {!! $errors->first('avatar','<span class=error>:message</span>') !!}
                        </label>


            {{--    Texto del nombre del brincolin  --}}
                        <div class="form-group">
                            {!! Form::label('brincolin', 'Brincolin'); !!}
                            {!! Form::text('brincolin', null, ['class' => 'form-control', 'id'=> 'brincolin', 'required', 'placeholder' => 'Nombre de brincolin']) !!}
                        </div>

            {{--    Texto del nombre de la descripcion del brincolin   --}}
                        <div class="form-group">
                            {!! Form::label('detalles', 'Detalles'); !!}
                            {!! Form::text('detalles', null, ['class' => 'form-control', 'id'=> 'detalles', 'required', 'placeholder' => 'Detalles del brincolin']) !!}
                        </div>

            {{--    Anchura del brincolin                   --}}
                        <div class="form-group">
                            {!! Form::label('ancho' , 'Ancho'); !!}
                            <br>
                            {!! Form::number('ancho', null , ['id'=>'ancho' , 'required',  'step'=>'0.01']); !!}

                        </div>

             {{--    Alto del Brincolin                        --}}
                        <div class="form-group">
                            {!! Form::label('alto' , 'Alto'); !!}
                            <br>
                            {!! Form::number('alto', null , ['id'=>'alto' , 'required',  'step'=>'0.01']); !!}

                        </div>

             {{--    Largo del Brincolin                        --}}
                        <div class="form-group">
                            {!! Form::label('largo' , 'Largo'); !!}
                            <br>
                            {!! Form::number('largo', null , ['id'=>'largo' , 'required',  'step'=>'0.01']); !!}

                        </div>

             {{--    Precio del Brincolin                        --}}
                        <div class="form-group">
                            {!! Form::label('precio' , 'Precio'); !!}
                            <br>
                            {!! Form::number('precio', null , ['id'=>'precio' , 'required',  'step'=>'0.01']); !!}

                        </div>

            {{--    Disponibilidad del Brincolin                   --}}
                        <div class="form-group">
                            {!! Form::label('disponibilidad' , 'Disponibilidad'); !!}


                            {!! Form::select('disponibilidad', [
                                    '1' => 'Disponible' ,
                                    '0' => 'No Disponible'
                                    ], null, ['class' => 'form-control'] ) !!}
                        </div>

            {{--    Seleccion de Categoria del brincolin                    --}}
                        <div class="form-group">

                            {!! Form::label('C','Categorias'); !!}   <br>

{{--                            {!! Form::chechbok('', '', ['class' => 'form-control'] ) !!}--}}
{{--                            {!! Form::label('' , ''); !!}--}}

                            {!! Form::checkbox('cat1','1',false ,['id' => 'cat1']); !!}
                            {!! Form::label('cat1' , 'Niño'); !!}
                            <br>
                            {!! Form::checkbox('cat2','1',false ,['id' => 'cat2']); !!}
                            {!! Form::label('cat2' , 'Niña'); !!}
                            <br>
                            {!! Form::checkbox('cat3','1',false ,['id' => 'cat3']); !!}
                            {!! Form::label('cat3' , 'Fantasia'); !!}
                            <br>
                            {!! Form::checkbox('cat4','1',false ,['id' => 'cat4']); !!}
                            {!! Form::label('cat4' , 'Pirata'); !!}


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
