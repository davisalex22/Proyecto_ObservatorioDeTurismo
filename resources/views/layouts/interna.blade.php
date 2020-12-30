<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
  <title>Observatorio de Turismo UTPL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  </head>
    <body>
    
        <!--==========================
          Header
        ============================-->
        <header id="header">
          <div class="container-fluid">
      
            <div id="logo" class="logo">
              <!--<h1><a href="#intro" class="scrollto">Observatorio de Turismo</a></h1>-->
              <!-- Uncomment below if you prefer to use an image logo -->
              <img src="img/logo.png" alt="" title="" /></a>
            </div>
            <h5 class="titlelogo">Observatorio de Turismo<br>Región Sur del Ecuador</h5>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('estadisticas') }}">Estadísticas</a></li>
                <li><a href="{{ url('lugares') }}">Lugares Turísticos</a></li>
                <li><a href="{{ url('contactos') }}">Contactos</a></li>               
                    @if (Route::has('login'))                    
                            @auth
                            <li><a href="{{ url('admin') }}">Administración</a></li>
                            @else
                            <li><a href="{{ route('login') }}">Login</a></li>        
                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth                  
                    @endif
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
         
        </header><!-- #header -->
      @yield('contenido')
       
        <!--==========================
          Footer
        ============================-->
        <footer id="footer">
          <div class="footer-top">
            <div class="container">
              <div class="row">
      
                <div class="col-lg-3 col-md-6 footer-info">
                  <img id="logo" class="logoFooter" src="img/logo.PNG">
                 
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Mapa del Sitio</h4>
                  <ul>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Estadísticas</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Lugares Turísticos</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Contactos</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h4>Contactos</h4>
                    <strong>Dirección:</strong> Marcelino Champagnat s/n<br><br>
                    <strong>Email:</strong> apludena@utpl.edu.ec<br><br>
                    <strong>Teléfono:</strong> +593 3701444<br><br>
                    <strong>Email:</strong> resanchez@utpl.edu.ec<br>
                  </p>
      
               
      
                </div>
      
                <div class="col-lg-3 col-md-6 footer-newsletter">
                  <h4>Redes Sociales</h4>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
      
              </div>
            </div>
          </div>
      
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </footer><!-- #footer -->
      
        
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->
      
        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>
      
        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
      
 
    </body>
</html>
