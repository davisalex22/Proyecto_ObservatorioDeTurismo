@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Configuración de publicaciones</h1>
@stop

@section('content')<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">                    
                    <div class="card-header">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear
                            nueva publicación</a>
                    </div>
                    <div class="card-body">                        
                        <table class="table table-striped " id="users" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Título</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Contenido</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>s</td>
                                        <td>s</td>
                                        <td>s</td>
                                        <td>
                                            <form action="" class="formulario-eliminar" method="POST">
                                                <a href="" class="btn btn-info ">Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="formulario-eliminar" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
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
<link rel="stylesheet" href="/css/estilos.css">
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   $('.formulario-eliminar').submit(function(e){
       e.preventDefault();
       swal({
        title: "¿Esta seguro de eliminar este usuario?",
        text: "El usuario se eliminara definitivamente del sistema",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {                    
            swal("Usuario eliminado correctamente", {
            icon: "success",
            });
            this.submit();
        } else {
            swal("El usuario no ha sido eliminado");
        }
        });
   });  
</script>
<script>
    $(document).ready(function() {
        $('#users').DataTable({
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
<script src="/js/formulario.js"></script>


@stop
