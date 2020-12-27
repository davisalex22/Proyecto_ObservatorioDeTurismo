@extends('adminlte::page')

@section('title', 'Carga de Archivos')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Carga de Archivos</h3>
        </div>
        <div class="card-body">
          <div id="actions" class="row">
            <div class="col-lg-6">
              <div class="btn-group w-100">
                <span class="btn btn-success col fileinput-button">
                  <i class="fas fa-plus"></i>
                  <span>Add files</span>
                </span>
                <button type="submit" class="btn btn-primary col start">
                  <i class="fas fa-upload"></i>
                  <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning col cancel">
                  <i class="fas fa-times-circle"></i>
                  <span>Cancel upload</span>
                </button>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <div class="fileupload-process w-100">
                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                </div>
              </div>
            </div>
          </div>
          <div class="table table-striped files" id="previews">
            <div id="template" class="row mt-2">
              <div class="col-auto">
                  <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
              </div>
              <div class="col d-flex align-items-center">
                  <p class="mb-0">
                    <span class="lead" data-dz-name></span>
                    (<span data-dz-size></span>)
                  </p>
                  <strong class="error text-danger" data-dz-errormessage></strong>
              </div>
              <div class="col-4 d-flex align-items-center">
                  <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                  </div>
              </div>
              <div class="col-auto d-flex align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary start">
                    <i class="fas fa-upload"></i>
                    <span>Start</span>
                  </button>
                  <button data-dz-remove class="btn btn-warning cancel">
                    <i class="fas fa-times-circle"></i>
                    <span>Cancel</span>
                  </button>
                  <button data-dz-remove class="btn btn-danger delete">
                    <i class="fas fa-trash"></i>
                    <span>Delete</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div> 
      <div class="col-md-8" style = "float: none; margin: 0 auto;">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Historial de Archivos</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>NOMBRE ARCHIVO</th>
                  <th>FECHA</th>
                  <th style="width: 50px">OPCIONES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><button type="button" class="btn btn-block btn-success btn-sm">Descargar</button></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-warning">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-primary">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-success">90%</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card -->

      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

@section('js')
    <script> console.log('Hi!'); </script>
     <!-- jQuery -->
<script src="/js/jquery.min.js"></script>


<!-- dropzonejs -->
<script src="/js/dropzone.min.js"></script>

<script>
 

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false;

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template");
  previewNode.id = "";
  var previewTemplate = previewNode.parentNode.innerHTML;
  previewNode.parentNode.removeChild(previewNode);

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  });

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  });

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
  });

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  });

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
  });

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
  };
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
  };
  // DropzoneJS Demo Code End
</script>
   @stop