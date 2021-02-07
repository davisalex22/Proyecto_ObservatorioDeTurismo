@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Análisis de Datos</h1>
@stop

@section('content')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @if (auth()->user()->rol != 'Administrador')
        <section>
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card card-widget widget-user">
                                <div class="widget-user-header text-white" style="background: #212529">
                                    <h3 class="widget-user-username text-center">Establecimiento:
                                        {{ auth()->user()->hotel }}</h3>
                                    <h5 class="widget-user-desc text-centert">Gráficas</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle" src="../img/edificio.png" alt="User Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comparativa Anual</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
                                    @if (auth()->user()->rol == 'Administrador')
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label>Selecciona Hotel</label>
                                                <select class="form-control" id="hotel1" name="hotel1">
                                                    <option value="" selected disabled>Seleccione un Hotel</option>
                                                    @foreach ($hoteles as $hotel)
                                                        <option value="{{ $hotel->idHotel }}">{{ $hotel->nombre_hotel }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-6 col-md-4">
                                        <div class="form-group">
                                            <label>Selecciona una Variable</label>
                                            <select class="form-control" id="varGrafica" name="varGrafica">
                                                <option disabled selected>Selecciona una variable</option>
                                                <option value="checkins">Checkins</option>
                                                <option value="checkouts">Checkouts</option>
                                                <option value="pernoctaciones">Pernoctaciones</option>
                                                <option value="nacionales">Nacionales</option>
                                                <option value="extranjeros">Extranjeros</option>
                                                <option value="habitaciones_ocupadas">Habitaciones Ocupadas</option>
                                                <option value="habitaciones_disponibles ">Habitaciones Disponibles</option>
                                                <option value="tarifa_promedio">Tarifa Promedio</option>
                                                <option value="tar_per">TarPer</option>
                                                <option value="ventas_netas">Ventas Netas</option>
                                                <option value="porcentaje_ocupacion">Porcentaje Ocupación</option>
                                                <option value="revpar">Revpar</option>
                                                <option value="empleados_temporales">Empleados Temporales</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Año:</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" id="anio1" name="anio1">
                                                            <option  disabled selected>Selecciona un año</option>                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Año:</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" id="anio2" name="anio2">
                                                            <option  disabled selected>Selecciona un año</option>                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="highcharts-figure">
                                    <div id="chart-container"></div>
                                </figure>
                                <div class="col-12 align-self-center text-center">
                                    <button class="btn btn-primary">Generar Reporte</button>
                                </div>
                            </form>
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
                            <h3 class="card-title">Comparativa Mensual</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
                                    @if (auth()->user()->rol == 'Administrador')
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label>Selecciona Hotel</label>
                                                <select class="form-control" id="hotel2" name="hotel2">
                                                    <option value="" selected disabled>Seleccione un Hotel</option>
                                                    @foreach ($hoteles as $hotel)
                                                        <option value="{{ $hotel->idHotel }}">{{ $hotel->nombre_hotel }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-6 col-md-4">
                                        <div class="form-group">
                                            <label>Selecciona una variable</label>
                                            <select class="form-control" id="varGrafica" name="varGrafica">
                                                <option disabled selected>Selecciona una variable</option>
                                                <option value="checkins">Checkins</option>
                                                <option value="checkouts">Checkouts</option>
                                                <option value="pernoctaciones">Pernoctaciones</option>
                                                <option value="nacionales">Nacionales</option>
                                                <option value="extranjeros">Extranjeros</option>
                                                <option value="habitaciones_ocupadas">Habitaciones Ocupadas</option>
                                                <option value="habitaciones_disponibles ">Habitaciones Disponibles</option>
                                                <option value="tarifa_promedio">Tarifa Promedio</option>
                                                <option value="tar_per">TarPer</option>
                                                <option value="ventas_netas">Ventas Netas</option>
                                                <option value="porcentaje_ocupacion">Porcentaje Ocupación</option>
                                                <option value="revpar">Revpar</option>
                                                <option value="empleados_temporales">Empleados Temporales</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Año: Mes:</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6 .col-sm-4">
                                                            <div class="form-group">
                                                                <select class="form-control" id="anio3" name="anio3">
                                                                    <option  disabled selected>Selecciona un año</option>                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 .col-sm-4">
                                                            <div class="form-group">
                                                                <select class="form-control" id="mes1" name="mes1">
                                                                    <option disabled selected>Selecciona un mes</option>                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Año: Mes:</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6 .col-sm-4">
                                                            <div class="form-group">
                                                                <select class="form-control" id="anio4" name="anio4">
                                                                    <option  disabled selected>Selecciona un año</option>                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 .col-sm-4">
                                                            <div class="form-group">
                                                                <select class="form-control" id="mes2" name="mes2">
                                                                    <option disabled selected>Selecciona un mes</option>                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="highcharts-figure">
                                    <div id="chart-container"></div>
                                </figure>
                                <div class="col-12 align-self-center text-center">
                                    <button class="btn btn-primary">Generar Reporte</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="..vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/css/chart.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="https://www.highcharts.com/samples/static/highslide.css" />

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../vendor/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="../vendor/moment/moment.min.js"></script>
    <script src="../vendor/inputmask/jquery.inputmask.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
    <script src="../vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://www.highcharts.com/samples/static/highslide-full.min.js"></script>
    <script src="https://www.highcharts.com/samples/static/highslide.config.js" charset="utf-8"></script>


    <script>
        var numVar = <?php echo json_encode($numV); ?>;    c

        switch (numVar) {
            case 1:
                var varX = <?php echo json_encode((array) $variableX); ?>;            var varY = <?php echo json_encode((array) $variableY); ?>;            Highcharts.chart('chart-container', {
                    chart: {
                        type: '{{ $tipoGrafica }}'
                    },
                    title: {
                        text: 'Establecimiento: {{ $hotelGrafica }}'
                    },
                    subtitle: {
                        text: 'Observatorio de Turismo'
                    },
                    xAxis: {
                        categories: varX,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Valores'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: '{{ $varGrafica }}',
                        data: varY
                    }]
                });
                break;
            case 2:
                var varX = <?php echo json_encode((array) $variableX); ?>;            var varY = <?php echo json_encode((array) $variableY); ?>;            var varY1 = <?php echo json_encode((array) $variableY1); ?>;            Highcharts.chart('chart-container', {
                    chart: {
                        type: '{{ $tipoGrafica }}'
                    },
                    title: {
                        text: 'Establecimiento: {{ $hotelGrafica }}'
                    },
                    subtitle: {
                        text: 'Observatorio de Turismo'
                    },
                    xAxis: {
                        categories: varX,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Valores'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: '{{ $value1 }}',
                        data: varY
                    }, {
                        name: '{{ $value2 }}',
                        data: varY1
                    }]
                });
                break; // Al encontrar un "break", no será ejecutado el 'case 2:'
            case 3:
                var varX = <?php echo json_encode((array) $variableX); ?>;            var varY = <?php echo json_encode((array) $variableY); ?>;            var varY1 = <?php echo json_encode((array) $variableY1); ?>;            var varY2 = <?php echo json_encode((array) $variableY2); ?>;            Highcharts.chart('chart-container', {
                    chart: {
                        type: '{{ $tipoGrafica }}'
                    },
                    title: {
                        text: 'Establecimiento: {{ $hotelGrafica }}'
                    },
                    subtitle: {
                        text: 'Observatorio de Turismo'
                    },
                    xAxis: {
                        categories: varX,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Valores'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: '{{ $value1 }}',
                        data: varY
                    }, {
                        name: '{{ $value2 }}',
                        data: varY1
                    }, {
                        name: '{{ $value3 }}',
                        data: varY2
                    }]
                });
                break;
            default:
                console.log('default');
        }

    </script>
    <script src="/js/comparativa.js"></script>
@stop
