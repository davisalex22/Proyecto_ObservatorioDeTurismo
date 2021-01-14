@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Administración de Usuarios</h1>
@stop

@section('content')
<a href="users/create" class = "btn btn-primary">Crear</a>

<table class = "table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope ="col">ID</th>
            <th scope ="col">Nombre</th>
            <th scope ="col">Correo</th>
            <th scope ="col">Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user ->id}}</td>
            <td>{{$user ->name}}</td>
            <td>{{$user ->email}}</td>
            <td>{{$user ->rol}}</td>
            <td>
              <form action="{{route('users.destroy',$user->id)}}" method = "POST">
                <a href ="/admin/users/{{$user ->id}}/edit" class = "btn btn-info" >Editar</a>
                @csrf
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
@stop