@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
@stop

@section('content')
<div class="col-md-8" style="float: none; margin: 0 auto;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edición de Usuario {{$user->name}}</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="admin/users/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input id="id" name="id" type="text" class="form-control" value="{{$user->id}}">            
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$user->name}}">            
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo Electrónico</label>
                <input id="correo" name="correo" type="text" class="form-control" value="{{$user->email}}" >            
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Rol</label>
                <input id="rol" name="rol" type="text" class="form-control" value="{{$user->rol}}">            
            </div>       
            <a href="/admin/users" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary" >Guardar</button>
        </form>
      </div>   
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop