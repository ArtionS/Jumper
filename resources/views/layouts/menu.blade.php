<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">

            <div class="nav">

{{--                Seccion de Libreria--}}
                <div class="sb-sidenav-menu-heading">Brincolines</div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    Brincolines
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ action('BrincolinController@index') }}">Brincolines</a>
                        <a class="nav-link" href="{{ action('BrincolinController@create')}}">Nuevo Brincolin</a>

{{--                    <a class="nav-link" href="layout-sidenav-light.html">Nuevo Libro</a>--}}

                    </nav>
                </div>

{{--                <div class="sb-sidenav-menu-heading">--}}
{{--                    Categoria--}}
{{--                </div>--}}
                <a class="nav-link" href="{{ action('CategoriaController@index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-columns">
                        </i>
                    </div>
                    Categorias
                </a>

{{--                Parte del Menu dedicada a los pedidos   --}}

                <div class="sb-sidenav-menu-heading">Pedidos</div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    Pedidos
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ action('PedidoController@index') }}">Pedidos</a>
                        <a class="nav-link" href="{{ action('PedidoController@create')}}">Nuevo Pedido</a>

                        {{--                    <a class="nav-link" href="layout-sidenav-light.html">Nuevo Libro</a>--}}

                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{\Auth::user()->name}}
        </div>
    </nav>
</div>
