@extends('layouts.interna')

@section('contenido')
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
                                   
                                </div>
                                <div class="col-6 col-md-4">
                                   
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
                            <h3 class="card-title"><label>Huéspedes</label></h3>
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
                            <h3 class="card-title">Tarifa Promedio</h3>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Por Habitación</h3>
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

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Por Persona</h3>
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
                            <h3 class="card-title">Ocupación</h3>
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
                            <h3 class="card-title">RevPar</h3>
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
                            <h3 class="card-title">Estadía Promedio</h3>
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
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
