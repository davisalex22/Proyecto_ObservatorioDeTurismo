@extends('layouts.interna')
@section('header')


@stop
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
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Indicadores de alojamiento Loja</h3>
                <p>Boletín estadístico de indicadores de alojamiento correspondiente al mes de octubre 2019.

                    Se denota un decrecimiento en porcentaje de ocupación y en tarifa promedio, con respecto al mes
                    anterior, en los establecimientos de las diferentes categorías. Esto, debido al estancamiento que se
                    produjo durante los días de manifestaciones realizadas en este mes, tal y como se puede observar en la
                    gráfica de ocupación diaria. </p>

            </header>

        </div>
    </section><!-- #about -->
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
                                    <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                    <input type="text" class="knob" value="44" data-width="120" data-height="120"
                                        data-fgColor="#ff851b">

                                    <div class="knob-label">data-width="120"</div>
                                </div>
                                <div class="col">
                                    <span class="info-box-icon"><i class="far fa-star"></i>4</span>
                                    <input type="text" class="knob" value="16" data-width="120" data-height="120"
                                        data-fgColor="#d81b60">

                                    <div class="knob-label">data-width="120"</div>
                                </div>
                                <div class="col">
                                    <span class="info-box-icon"><i class="far fa-star"></i>3</span>
                                    <input type="text" class="knob" value="20" data-width="120" data-height="120"
                                        data-fgColor="#ffc107">

                                    <div class="knob-label">data-width="120"</div>
                                </div>
                                <div class="col">
                                    <span class="info-box-icon"><i class="far fa-star"></i>2</span>
                                    <input type="text" class="knob" value="35" data-width="120" data-height="120"
                                        data-fgColor="#3d9970">

                                    <div class="knob-label">data-width="120"</div>
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
                            <h3 class="card-title"><label>Tarifa Promedio</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Por Habitación</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="info-box bg-orange">
                                                <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Total de Checkins</span>
                                                    <span class="info-box-number">41,410</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-box bg-maroon">
                                                <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Total de Checkots</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-box bg-warning">
                                                <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Ventas Netas</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-box bg-olive">
                                                <span class="info-box-icon"><i class="far fa-star"></i>2</span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Total de Checkots</span>
                                                    <span class="info-box-number">41,410</span>

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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Por Persona</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="info-box bg-orange">
                                                <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Total de Checkins</span>
                                                    <span class="info-box-number">41,410</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-box bg-maroon">
                                                <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Total de Checkots</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-box bg-warning">
                                                <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Ventas Netas</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="info-box bg-olive">
                                                <span class="info-box-icon"><i class="far fa-star"></i>2</span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Total de Checkots</span>
                                                    <span class="info-box-number">41,410</span>

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
                                <div class="col">
                                    <div class="info-box bg-orange">
                                        <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkins</span>
                                            <span class="info-box-number">41,410</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-maroon">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkots</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Ventas Netas</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-olive">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkots</span>
                                            <span class="info-box-number">41,410</span>

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
                                <div class="col">
                                    <div class="info-box bg-orange">
                                        <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkins</span>
                                            <span class="info-box-number">41,410</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-maroon">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkots</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Ventas Netas</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-olive">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkots</span>
                                            <span class="info-box-number">41,410</span>

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
                                <div class="col">
                                    <div class="info-box bg-orange">
                                        <span class="info-box-icon"><i class="far fa-star"></i>5</span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkins</span>
                                            <span class="info-box-number">41,410</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-maroon">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkots</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="far fa-star"></i>3</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Ventas Netas</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="info-box bg-olive">
                                        <span class="info-box-icon"><i class="far fa-star"></i>4</span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Total de Checkots</span>
                                            <span class="info-box-number">41,410</span>

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

@stop
