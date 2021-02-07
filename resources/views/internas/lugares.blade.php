@extends('layouts.interna')
@section('header')
<header id="header" class="fixed-top ">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-11 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="{{ url('/') }}">Observatorio de Turismo<br>Región Sur del
                        Ecuador</a></h1>
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
            <h3>Lugares turísticos de Loja</h3>

        </header>
    </div>
</section>



<div class="container">


    <div class="row">

        <div class="col-lg-3">


            <div class="list-group">
                <a href="#" class="list-group-item">Hoteles</a>
                <a href="#" class="list-group-item">Parques</a>
                <a href="#" class="list-group-item">Lugares Turísticos</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">


            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <h1 class="my-4">Sonesta Hotel</h1>
                    <div class="carousel-item active">

                        <img class="d-block img-fluid" src="../img/hoteles/Sonesta/sonesta2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="../img/hoteles/Sonesta/sonesta3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="../img/hoteles/Sonesta/sonesta1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div class="card mt-4">
                <div class="card-body">
                    <p class="card-text">Sonesta Hotel Loja es un exclusivo hotel cerca del centro de Loja que se destaca por su seguridad y tranquilidad. 
                    Ubicado en la ciudadela Zamora, este alojamiento es la opción perfecta tanto para vacaciones como para viajes de negocios por su cercanía
                     a las principales zonas de interés de la ciudad.</p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; </span>
                    5 estrellas
                </div>
            </div>


            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/hoteles/Sonesta/habitaciones.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Habitaciones<br><br></a>
                            </h4>
                            <p class="card-text">Contamos con las mejores habitaciones de acuerdo sus necesidades</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/hoteles/Sonesta/cafeteria1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Cafetería<br><br></a>
                            </h4>
                            <p class="card-text">Disfruta de la gastronomía que Loja tiene que ofrecerte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/hoteles/Sonesta/salon.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Salón de Eventos<br><br></a>
                            </h4>
                            <p class="card-text">Tenemos un salón grande para que disfrutes con tus seres amados, 
                            para todas tus ocasiones especiales.</p>
                        </div>
                    </div>
                </div>
                

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->



@stop
@section('js')

@endsection