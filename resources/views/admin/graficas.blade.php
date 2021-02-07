@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Gráficas</h1>
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
                            <h3 class="card-title">Filtros</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
                                    @if (auth()->user()->rol == 'Administrador')
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label>Selecciona Hotel</label>
                                                <select class="form-control" id="hotelGrafica" name="hotelGrafica">
                                                    <option disabled selected>Selecciona un Hotel</option>
                                                    @foreach ($hoteles as $hotel)
                                                        <option>{{ $hotel->nombre_hotel }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-6 col-md-4">
                                        <label>Rango de Fecha</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="dateIncio"
                                                        name="dateInicio" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="dateFin" name="dateFin" />
                                                </div>
                                            </div>
                                        </div>                                                                                  
                                    </div> 
                                    <div class="col-6 col-md-4">
                                        <div class="form-group">
                                            <label>Selecciona Gráfica</label>
                                            <select class="form-control" name="tipoGrafica" id="tipoGrafica">
                                                <option value="" disabled selected>Selecciona una gráfica</option>
                                                <option value="column">Gráfica de Barras</option>
                                                <option value="line">Gráfica de Líneas</option>
                                                <option value="pie">Gráfica de Pastel</option>
                                                <option value="scatter">Gráfica de Dispersión</option>
                                                <option value="area">Gráfica de Área</option>
                                            </select>
                                        </div>                                       
                                    </div>    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Selecciona variables</label>
                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-sm">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="checkins" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Checkins</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="checkouts" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Checkouts</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="pernoctaciones" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Pernoctaciones</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="nacionales" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Nacionales</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="extranjeros" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Extranjeros</label>
                                                        </div>                                                 
                                                    </div>
                                                    <div class="col-sm">                                                        
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="habitaciones_ocupadas" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Habitaciones Ocupadas</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="habitaciones_disponibles" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Habitaciones Disponibles</label>
                                                        </div>                                            
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="tarifa_promedio" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Tarifa Promedio</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="tar_per" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">TarPer</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="ventas_netas" id="varGrafica" name="varGrafica[]">
                                                            <label class="form-check-label" for="varGrafica">Ventas Netas</label>
                                                        </div>
                                                  </div>
                                                  <div class="col-sm">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="porcentaje_ocupacion" id="varGrafica" name="varGrafica[]">
                                                        <label class="form-check-label" for="varGrafica">Porcentaje Ocupación</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="revpar" id="varGrafica" name="varGrafica[]">
                                                        <label class="form-check-label" for="varGrafica">Revpar</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="empleados_temporales" id="varGrafica" name="varGrafica[]">
                                                        <label class="form-check-label" for="varGrafica">Empleados Temporales</label>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-12">
                                        <button class="btn btn-primary">Generar Gráfica</button>
                                    </div>   
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
                            <h3 class="card-title">Filtro Aplicado</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-xs-6 text-center">
                                <table class="table table-bordered" id="users" style="width:100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th colspan="2">Rango de Fecha</th>
                                            <th>Hotel</th>
                                            <th>Variable</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $dateInicio }}</td>
                                            <td>{{ $dateFin }}</td>
                                            <td>{{ $hotelGrafica }}</td>
                                            <td>{{ $varGrafica }}</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                            <h3 class="card-title">Gráfica</h3>
                        </div>
                        <div class="card-body">
                            <div class="row col-12">                                                             
                                <figure class="highcharts-figure">
                                    <div id="chart-container"></div>
                                </figure>                                
                            </div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
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
       var numVar = <?php echo json_encode($numV); ?>;  
       console.log(numVar);

        switch (numVar) {
            case 1:
                var varX = <?php echo json_encode((array) $variableX); ?>;    
                var varY = <?php echo json_encode((array) $variableY); ?>;
                Highcharts.chart('chart-container', {
                    chart: {
                        type: '{{ $tipoGrafica }}'
                    },
                    title: {
                        text: 'Establecimiento: {{$hotelGrafica}}'
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
                        data:varY                              
                    }]
                });
              break;   
            case 2: 
                var varX = <?php echo json_encode((array) $variableX); ?>;    
                var varY = <?php echo json_encode((array) $variableY); ?>;
                var varY1 = <?php echo json_encode((array) $variableY1); ?>;
                Highcharts.chart('chart-container', {
                    chart: {
                        type: '{{ $tipoGrafica }}'
                    },
                    title: {
                        text: 'Establecimiento: {{$hotelGrafica}}'
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
                        data:varY
                    }, {
                        name:  '{{ $value2 }}',
                        data: varY1          
                    }]
                });
              break; // Al encontrar un "break", no será ejecutado el 'case 2:'
            case 3:
                var varX = <?php echo json_encode((array) $variableX); ?>;    
                var varY = <?php echo json_encode((array) $variableY); ?>;
                var varY1 = <?php echo json_encode((array) $variableY1); ?>;
                var varY2 = <?php echo json_encode((array) $variableY2); ?>;
                Highcharts.chart('chart-container', {
                    chart: {
                        type: '{{ $tipoGrafica }}'
                    },
                    title: {
                        text: 'Establecimiento: {{$hotelGrafica}}'
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
                        data:varY
                    }, {
                        name:  '{{ $value2 }}',
                        data: varY1          
                    }, {
                        name:  '{{ $value3 }}',
                        data: varY2 
                    }]
                });
              break;
            default:
              console.log('default');
          }
    </script>

    <script>
        $(function() {
            $('input[name="dateInicio"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10)
            });
            $('input[name="dateInicio"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
            });
            $('input[name="dateInicio"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });

    </script>
    <script>
        $(function() {
            $('input[name="dateFin"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10)
            });
            $('input[name="dateFin"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
            });
            $('input[name="dateFin"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });

    </script>
@stop
