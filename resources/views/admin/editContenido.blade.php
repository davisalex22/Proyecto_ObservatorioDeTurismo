@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Edición de contenido</h1>
@stop

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edición de publicación</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method = "POST">
                            @csrf
                            @method('PUT')
                            <div class = "mb-3">
                                <label for="" class = "form-label">Título</label>
                                <input id = "name" name = "name"  type="text" class ="form-control">
                            </div>
                            <div class = "mb-3">
                                <div class="form-group">
                                    <label for="title">Seleccione una imagen</label>
                                    <input type="file" class="form-control" name="files[]" multiple/>
                                </div>
                            </div>
                            <div class = "mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Contenido</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>  
                            </div>
                            <!-- botones -->
                            <a href="/admin/users" class ="btn btn-secondary" tabindex = "5">Cancelar</a>
                            <button type = "submit" class ="btn btn-primary" tabindex = "4">Guardar</button>
                    
                        </form>
                       
                    </div>
                </div>
            </div>
</section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop