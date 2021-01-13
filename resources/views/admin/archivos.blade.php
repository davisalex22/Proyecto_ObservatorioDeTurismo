@extends('adminlte::page')

@section('title', 'Carga de Archivos')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<section style = "padding-top:60px;">
  <div class="container">
      <div class="row">
          <div class = "col-md-6 offset-md-3">
              <div class="card">
                  <div class="card-header">
                      Import
                  </div>
                  <div class="card-body">
                      <form method="POST" enctype = "multipart/form-data" action="{{route('archivo.store')}}">
                          @csrf                          
                          <div class="form-group">
                              <label for="title">Choose CSV</label>
                              <input type="file" name="file" class="form-control"/>
                          </div>
                          <button type="submit" class = "btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> 
<div class ="container">
  <div class = "row justify-content-center">
    <div class = "col-md-8">
      <div class = "card">
        <div class = "card-header">{{__('Subir archivos' )}}</div>
        <div class = "card_body">
          @if (session('status'))
          <div class = "alert alert-success" role = "alert">
            {{session('status')}}
          </div>
          @endif
          <form method="POST" action= "{{route('files.store') }}" enctype ="multipart/form-data">
          @csrf
          <input type="file" class="form-control" name="files[]" multiple>
          <button class type="submit" class = "mt-4 btn btn-primary float-right">Subir</button>
          </form>
        </div>
      </div>
    </div>
  </div>
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