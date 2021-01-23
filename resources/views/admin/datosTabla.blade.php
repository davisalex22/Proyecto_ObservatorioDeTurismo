@extends('adminlte::page')

@section('title', 'Administración')



@section('content_header')
    <h1>Datos de Archivos almacenados</h1>
@stop

@section('content')
    <div class="col-6 col-md-4">
        <div class="form-group">
            <select class="form-control" id="sel1">
                <option selected>Historial</option>
                <option>Sonesta Hotel</option>
                <option>Hotel Victoria</option>
            </select>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos destacados del último mes</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped " id="hoteles" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>idHistorial</th>
                                        <th>Fecha</th>
                                        <th>Checkins</th>
                                        <th>Checkouts</th>
                                        <th>Pernoctaciones</th>
                                        <th>Nacionales</th>
                                        <th>Extranjeros</th>
                                        <th>H_ocupadas</th>
                                        <th>H_disponibles</th>
                                        <th>Tipo_tarifa</th>
                                        <th>Tarifa_promedio</th>
                                        <th>Tar_per</th>
                                        <th>Ventas_netas</th>
                                        <th>Porcentaje_ocupacion</th>
                                        <th>Revpar</th>
                                        <th>Empleados Temporales</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                        <th>Hotel_idHotel</th>
                                        <th>Created_At</th>
                                        <th>Updatad_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historiales as $historial)
                                        <tr>
                                            <td>{{ $historial->idHistorial }}</td>
                                            <td>{{ $historial->fecha }}</td>
                                            <td>{{ $historial->checkins }}</td>
                                            <td>{{ $historial->checkouts }}</td>
                                            <td>{{ $historial->pernoctaciones }}</td>
                                            <td>{{ $historial->nacionales }}</td>
                                            <td>{{ $historial->extranjeros }}</td>
                                            <td>{{ $historial->habitaciones_ocupadas }}</td>
                                            <td>{{ $historial->habitaciones_disponibles }}</td>
                                            <td>{{ $historial->tipo_tarifa }}</td>
                                            <td>{{ $historial->tarifa_promedio }}</td>
                                            <td>{{ $historial->tar_per }}</td>
                                            <td>{{ $historial->ventas_netas }}</td>
                                            <td>{{ $historial->porcentaje_ocupacion }}</td>
                                            <td>{{ $historial->revpar }}</td>
                                            <td>{{ $historial->empleados_temporales }}</td>
                                            <td>{{ $historial->estado }}</td>
                                            <td>{{ $historial->opciones }}</td>
                                            <td>{{ $historial->Hotel_idHotel }}</td>
                                            <td>{{ $historial->created_at }}</td>
                                            <td>{{ $historial->update_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <!-- importaciones para descarga  -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hoteles').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                dom: 'Blfrtip',
                "scrollX": true,
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });

    </script>

@stop
