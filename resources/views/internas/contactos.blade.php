@extends('layouts.interna')
@section('header')
    <header id="header" class="fixed-top ">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="{{ url('/') }}">Observatorio de Turismo<br>Región Sur del Ecuador</a></h1>
                    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('estadisticas') }}">Indicadores</a></li>
                            <li><a href="{{ url('lugares') }}">Lugares Turísticos</a></li>
                            <li><a href="{{ url('contactos') }}">Estadísticas</a></li>
                            @if (Route::has('login'))
                                @auth
                                <li><a href="{{ url('admin') }}">Administración</a></li>
                                @else
                                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Registrar</a></li>
                                @endif
                                @endauth
                            @endif
                          </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
@stop

@section('contenido')
<section class="breadcrumbs">
    <div class="container">
        <header class="section-header">
            <h3>Boletín</h3>
            <p>El documento presenta los principales resultados de la fase de levantamiento de campo del proyecto de investigación denominado: "El turismo rural como eje de desarrollo sostenible en la parroquia de El Cisne del cantón Loja, provincia de Loja: generación de un modelo basado en el género y la inclusión", el mismo que es financiado con fondos propios por la Universidad Técnica Particular de Loja y que actualmente se encuentra aún en desarrollo.</p>
        </header>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Filtros</h3>
                </div>
                <div class="card-body">                        
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            1 of 2
                          </div>
                          <div class="col">
                            2 of 2
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('js')

@endsection
