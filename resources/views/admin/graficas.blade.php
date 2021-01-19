@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Graficas</h1>
@stop

@section('content')
<section>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Datos destacados del último mes</h3>
                    </div>                   
                    <div class="card-body">  
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="info-box bg-success">
                                <span class="info-box-icon"><i class="far fa-calendar-check"></i></span>
                  
                                <div class="info-box-content">
                                  <span class="info-box-text">Total de Checkins</span>
                                  <span class="info-box-number">41,410</span>
                  
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                    70% Increase in 30 Days
                                  </span>
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="info-box bg-danger">
                                <span class="info-box-icon"><i class="far fa-calendar-times"></i></span>
                  
                                <div class="info-box-content">
                                  <span class="info-box-text">Total de Checkots</span>
                                  <span class="info-box-number">41,410</span>
                  
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                    70% Increase in 30 Days
                                  </span>
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="info-box bg-warning">
                                <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>
                  
                                <div class="info-box-content">
                                  <span class="info-box-text">Ventas Netas</span>
                                  <span class="info-box-number">41,410</span>
                  
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                    70% Increase in 30 Days
                                  </span>
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="fas fa-hand-holding-usd"></i></span>
                  
                                <div class="info-box-content">
                                  <span class="info-box-text">Tarifa Promedio</span>
                                  <span class="info-box-number">41,410</span>
                  
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                    70% Increase in 30 Days
                                  </span>
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
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
                        <h3 class="card-title">Filtros</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Rango de Fechas</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Selecciona Hotel</label>
                                    <select class="form-control" id="sel1">
                                        <option selected>Selecciona un Hotel</option>
                                        <option>Sonesta Hotel</option>
                                        <option>Hotel Victoria</option>
                                        <option>Sonesta Hotel</option>
                                        <option>Hotel Victoria</option>
                                     
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <label>Selecciona Gráfica</label>
                                    <select class="form-control" id="sel1">
                                        <option selected>Selecciona Gráfica</option>
                                        <option>Gráfica de Barras</option>
                                        <option>Gráfica de Líneas</option>
                                        <option>Gráfica de Pastel</option>
                                        <option>Gráfica de Dispersión</option>
                                    </select>
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
                        <h3 class="card-title">Gráfica</h3>
                    </div>                   
                    <div class="card-body">  
                        <div class="row col-12">
                            <canvas id="myChart" width="400" height="400"></canvas>   
                        </div>
                                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<form action="/admin/graficas/all" action="POST" id="form1">
    @csrf

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="..vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../vendor/daterangepicker/daterangepicker.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="../vendor/moment/moment.min.js"></script>
<script src="../vendor/inputmask/jquery.inputmask.min.js"></script>
<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<script src="../vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script> 
    //Date range picker
      $('#reservation').daterangepicker()    
 </script>
<script>
    var graficas =[];
    var valores=[];
    $(document).ready(function(){
        $.ajax({
            url: '/admin/graficas/all',
            method: 'POST',
            data:{
                id:1,
                _token: $('input[name="_token"]').val()
            }
        }).done(function(res){
            var arreglo = JSON.parse(res);
            console.log(arreglo);
            for(var x=0;x<arreglo.length;x++){           
                    graficas.push(arreglo[x].fecha);
                    valores.push(arreglo[x].checkins);
                    generarGrafica();
            }
            
        });
        
    });
    function generarGrafica(){
        var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: graficas,
                    datasets: [{
                        label: 'Checkins',
                        data: valores,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
    }
</script>
<script>

    </script>
@stop

