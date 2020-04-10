
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jumper</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>

{{--    Menu superior --}}
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

{{--    Boton de home--}}
    <a class="navbar-brand" href="/"> Jumper </a>

{{--    Botón de despliege lateral--}}
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

{{--    Barra de busqueda--}}
{{--    @include('layouts.buscardor')--}}

{{--    Menu desplegable del ususario--}}
    @include('layouts.menuUsuario')

</nav>
<div id="layoutSidenav">

{{--    Men u de scroll lateral --}}
   @include('layouts.menu')

        <main>
                @yield('content')
        </main>

{{--        Pie de Página--}}
{{--        @include('layouts.footer')--}}


</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src=" {{ asset('js/scripts.js') }}"></script>

</body>
</html>
