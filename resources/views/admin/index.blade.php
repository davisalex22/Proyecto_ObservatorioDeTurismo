@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Bienvenido a la Administración</h1>
@stop

@section('content')
  <div class="col-md-6 offset-md-3">
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header text-white" style="background: #212529">
        <h3 class="widget-user-username text-center">Clara Gonzaga</h3>
        <h5 class="widget-user-desc text-centert">Administrador Master</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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