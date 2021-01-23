@extends('layouts.interna')
@section('header')

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-xl-11 d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="index.html">Observatorio de Turismo<br>Región Sur del Ecuador</a></h1>
        
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('estadisticas') }}">Estadísticas</a></li>
                <li><a href="{{ url('lugares') }}">Lugares Turísticos</a></li>
                {{-- <li><a href="{{ url('contactos') }}">Contactos</a></li> --}}
                @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('admin') }}">Administración</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                @endif
              </ul>
        </nav><!-- .nav-menu -->
      </div>
    </div>

  </div>
</header><!-- End Header -->


@stop
@section('contenido')
<section class="breadcrumbs">
            <div class="container">

                <header class="section-header">
                    <h3>Indicadores de alojamiento Loja</h3>
                    <p>Boletín estadístico de indicadores de alojamiento correspondiente al mes de octubre 2019.

                        Se denota un decrecimiento en porcentaje de ocupación y en tarifa promedio, con respecto al mes
                        anterior, en los establecimientos de las diferentes categorías. Esto, debido al estancamiento que se
                        produjo durante los días de manifestaciones realizadas en este mes, tal y como se puede observar en
                        la
                        gráfica de ocupación diaria. </p>

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
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label>Selecciona el año</label>
                                        <select class="form-control" id="selColumn">
                                            <option selected>Selecciona un Hotel</option>                                               
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label>Selecciona el mes</label>
                                        <select class="form-control" id="selColumn">
                                            <option selected>Selecciona un mes</option>  
                                            <option>Enero</option>     
                                            <option>Febrero</option>   
                                            <option>Marzo</option>   
                                            <option>Abril</option>   
                                            <option>Mayo</option>   
                                            <option>Junio</option>   
                                            <option>Julio</option>   
                                            <option>Agosto</option>   
                                            <option>Septiembre</option>   
                                            <option>Octubre</option>   
                                            <option>Noviembre</option>   
                                            <option>Diciembre</option>                                             
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">

                                </div>
                                <div class="col-6 col-md-4">
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><label>Huéspedes</label></h3>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label>5 estrellas</label>
                                        <canvas id="pieChart1"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <div class="col">
                                        <label>4 estrellas</label>
                                        <canvas id="pieChart2"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <div class="col">
                                        <label>3 estrellas</label>
                                        <canvas id="pieChart3"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <div class="col">
                                        <label>2 estrellas</label>
                                        <canvas id="pieChart4"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <div class="col">
                                        <label>1 estrella</label>
                                        <canvas id="pieChart5"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </section>

    
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <!-- Tarifa promedio -->
                        <div class="card-header">
                            <h3 class="card-title"><label>Tarifa Promedio</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="card">
                            <!-- Tarifa promedio por habitacion -->
                                <div class="card-header">
                                    <h3 class="card-title">Por Habitación</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                    <!-- Tarifa promedio por habitacion - hotel 5 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-orange">
                                                <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                                <div class="info-box-content">
                                                    <span class="info-box-number">$ {{$prom_hab5}}</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        Tarifa promedio por habitacion
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por habitacion - hotel 4 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-maroon">
                                                <span class="info-box-icon"><i class="far fa-star"></i>4</span>
                                                <div class="info-box-content">
                                                    <span class="info-box-number">$ {{$prom_hab4}}</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    Tarifa promedio por habitacion
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por habitacion - hotel 3 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-warning">
                                                <span class="info-box-icon"><i class="far fa-star"></i>3</span>
                                                <div class="info-box-content">          
                                                    <span class="info-box-number">$ {{$prom_hab3}}</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    Tarifa promedio por habitacion
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por habitacion - hotel 2 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-olive">
                                                <span class="info-box-icon"><i class="far fa-star"></i>2</span>
                                                <div class="info-box-content">                                  
                                                    <span class="info-box-number">$ {{$prom_hab2}}</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    Tarifa promedio por habitacion
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por habitacion - hotel 1 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-red">
                                                <span class="info-box-icon"><i class="far fa-star"></i>1</span>
                                                <div class="info-box-content">                 
                                                    <span class="info-box-number">$ {{$prom_hab1}}</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    Tarifa promedio por habitacion
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Por Persona</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                    <!-- Tarifa promedio por Persona - hotel 5 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-orange">
                                                <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                                <div class="info-box-content">
                                                    <span class="info-box-number">$ {{$prom_per5}}</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por Persona - hotel 4 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-maroon">
                                                <span class="info-box-icon"><i class="far fa-star"></i>4</span>
                                                <div class="info-box-content">
                                                    <span class="info-box-number">$ {{$prom_per4}}</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por Persona - hotel 3 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-warning">
                                                <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                                <div class="info-box-content">
                                                    
                                                    <span class="info-box-number">$ {{$prom_per3}}</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarifa promedio por Persona - hotel 2 estrellas -->
                                        <div class="col">
                                            <div class="info-box bg-olive">
                                                <span class="info-box-icon"><i class="far fa-star"></i>2</span>

                                                <div class="info-box-content">
                                                    
                                                    <span class="info-box-number">$ {{$prom_per2}}</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- Tarifa promedio por Persona - hotel 1 estrella -->
                                        <div class="col">
                                            <div class="info-box bg-red">
                                                <span class="info-box-icon"><i class="far fa-star"></i>1</span>

                                                <div class="info-box-content">
                                                    
                                                    <span class="info-box-number">$ {{$prom_per1}}</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><label>Ocupación</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                             <!-- Porcentaje ocupación - hotel 5 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-orange">
                                        <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                        <div class="info-box-content">
                                            <span class="info-box-number">{{$porcentaje_ocupacion5}} %</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Porcentaje ocupación - hotel 4 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-maroon">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$porcentaje_ocupacion4}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Porcentaje ocupación - hotel 3 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$porcentaje_ocupacion3}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Porcentaje ocupación - hotel 2 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-olive">
                                        <span class="info-box-icon"><i class="far fa-star"></i>2</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$porcentaje_ocupacion2}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Porcentaje ocupación - hotel 1 estrella -->
                                <div class="col">
                                    <div class="info-box bg-red">
                                        <span class="info-box-icon"><i class="far fa-star"></i>1</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$porcentaje_ocupacion1}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="line-chart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><label>RevPar</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                            <!--  RevPar- hotel 5 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-orange">
                                        <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">$ {{$revpar5}}</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--  RevPar- hotel 4 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-maroon">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">$ {{$revpar4}}</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--  RevPar- hotel 3 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                        <div class="info-box-content">
                                           
                                            <span class="info-box-number">$ {{$revpar3}}</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--  RevPar- hotel 2 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-olive">
                                        <span class="info-box-icon"><i class="far fa-star"></i>2</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">$ {{$revpar2}}</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--  RevPar- hotel 1 estrella -->
                                <div class="col">
                                    <div class="info-box bg-red">
                                        <span class="info-box-icon"><i class="far fa-star"></i>1</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">$ {{$revpar1}}</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><label>Estadía Promedio</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                            <!--  Estadía Promedio - hotel 5 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-orange">
                                        <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$estadia_promedio5}} %</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                 <!--  Estadía Promedio - hotel 4 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-maroon">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$estadia_promedio4}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                 <!--  Estadía Promedio - hotel 3 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$estadia_promedio3}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                 <!--  Estadía Promedio - hotel 2 estrellas -->
                                <div class="col">
                                    <div class="info-box bg-olive">
                                        <span class="info-box-icon"><i class="far fa-star"></i>2</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$estadia_promedio2}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                 <!--  Estadía Promedio - hotel 1 estrella -->
                                <div class="col">
                                    <div class="info-box bg-red">
                                        <span class="info-box-icon"><i class="far fa-star"></i>1</span>

                                        <div class="info-box-content">
                                            
                                            <span class="info-box-number">{{$estadia_promedio1}} %</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

@stop
@section('js')
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="../vendor/flot/jquery.flot.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script>
    $(function() {
        // INICIO HOTEL 5 ESTRELLA
        var donutData1 = {
            labels: [
                'Nacionales',
                'Extranjeros',
            ],
            datasets: [{
                data: [{{$pNacionales5}}, {{$pExtranjeros5}} ],
                backgroundColor: ['#ff851b', '#e3bf9f', '#f39c12', '#00c0ef', '#3c8dbc',
                    '#d2d6de'
                ],
            }]
        }
        var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
        var pieData = donutData1;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })
        // FIN
        // INICIO
        var donutData2 = {
            labels: [
                'Nacionales',
                'Extranjeros',
            ],
            datasets: [{
                data: [{{$pNacionales4}}, {{$pExtranjeros4}}],
                backgroundColor: ['#d81b60', '#d184a0', '#f39c12', '#00c0ef', '#3c8dbc',
                    '#d2d6de'
                ],
            }]
        }
        var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
        var pieData = donutData2;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })
        // FIN
        // INICIO
        var donutData3 = {
            labels: [
                'Nacionales',
                'Extranjeros',
            ],
            datasets: [{
                data: [{{$pNacionales3}}, {{$pExtranjeros3}}],
                backgroundColor: ['#f39c12', '#f5cf93', '#f39c12', '#00c0ef', '#3c8dbc',
                    '#d2d6de'
                ],
            }]
        }
        var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
        var pieData = donutData3;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })
        // FIN
        // INICIO
        var donutData4 = {
            labels: [
                'Nacionales',
                'Extranjeros',
            ],
            datasets: [{
                data: [{{$pNacionales2}}, {{$pExtranjeros2}}],
                backgroundColor: ['#00a65a', '#80d9b0', '#f39c12', '#00c0ef', '#3c8dbc',
                    '#d2d6de'
                ],
            }]
        }
        var pieChartCanvas = $('#pieChart4').get(0).getContext('2d')
        var pieData = donutData4;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })
        // FIN
        // INICIO
        var donutData5 = {
            labels: [
                'Nacionales',
                'Extranjeros',
            ],
            datasets: [{
                data: [{{$pNacionales1}}, {{$pExtranjeros1}}],
                backgroundColor: ['#eb2d10', '#e89a8e', '#f39c12', '#00c0ef', '#3c8dbc',
                    '#d2d6de'
                ],
            }]
        }
        var pieChartCanvas = $('#pieChart5').get(0).getContext('2d')
        var pieData = donutData5;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })
        // FIN
    })
    </script>

@endsection
