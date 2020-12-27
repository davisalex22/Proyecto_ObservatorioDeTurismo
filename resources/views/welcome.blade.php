<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
  <title>Observatorio de Turismo UTPL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
                <li class="menu-active"><a href="#intro">Home</a></li>
                <li><a href="#about">Estadísticas</a></li>
                <li><a href="#services">Lugares Turísticos</a></li>
                <li><a href="#team">Contactos</a></li>               
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
      
        <!--==========================
          Intro Section
        ============================-->
        <section id="intro">
          <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
      
              <ol class="carousel-indicators"></ol>
      
              <div class="carousel-inner" role="listbox">
      
                <div class="carousel-item active">
                  <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
                  <div class="carousel-container">
                    <div class="carousel-content">
                      <h2>Visita la Región Sur del Ecuador</h2>
                      <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                    </div>
                  </div>
                </div>
      
                <div class="carousel-item">
                  <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
                  <div class="carousel-container">
                    <div class="carousel-content">
                      <h2>Visita sus parques</h2>
                      <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                    </div>
                  </div>
                </div>
      
                <div class="carousel-item">
                  <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
                  <div class="carousel-container">
                    <div class="carousel-content">
                      <h2>Conoce sus Hoteles</h2>
                      <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                    </div>
                  </div>
                </div>
      
                <div class="carousel-item">
                  <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
                  <div class="carousel-container">
                    <div class="carousel-content">
                      <h2>Diviertete en sus sitios turísticos</h2>
                      <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                    </div>
                  </div>
                </div>
      
                <div class="carousel-item">
                  <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
                  <div class="carousel-container">
                    <div class="carousel-content">
                      <h2>Disfruta de su Gente</h2>
                      <a href="#featured-services" class="btn-get-started scrollto">Empecemos</a>
                    </div>
                  </div>
                </div>
      
              </div>
      
              <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
      
              <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
      
            </div>
          </div>
        </section><!-- #intro -->
      
        <main id="main">
      
      
          <!--==========================
            About Us Section
          ============================-->
          <section id="about">
            <div class="container">
      
              <header class="section-header">
                <h3>Bienvenido</h3>
                <p>El Observatorio Turístico, Región Sur de Ecuador se crea en el año 2016 desde la Sección de Hotelería y
                  Turismo de la UTPL, con el apoyo de los departamentos Administración de Empresas y Economía, de esta misma
                  universidad. Además, como socios externos de este proyecto se encuentra el Ministerio de Turismo de Ecuador
                  y el Municipio de Loja. </p>
                  <h3>Gráficos Destacados</h3>
                  <img src="img/infografia.PNG" class="img-header" alt="">
              </header>
             
            </div>
          </section><!-- #about -->
      
      
          <!--==========================
            Team Section
          ============================-->
        
          <!-- #team -->
         
      
          <!--==========================
            Portfolio Section
          ============================-->
          <section id="portfolio" class="section-bg">
            <div class="container">
      
              <header class="section-header">
                <h3 class="section-title">Lugares Turísticos</h3>
              </header>
      
              <div class="row">
                <div class="col-lg-12">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todo</li>
                    <li data-filter=".filter-app">Parques</li>
                    <li data-filter=".filter-card">Hoteles</li>
                    <li data-filter=".filter-web">Sitios Turísticos</li>
                  </ul>
                </div>
              </div>
      
              <div class="row portfolio-container">
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/San-Sebastian.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/San-Sebastian.jpg" data-lightbox="portfolio" data-title="App 1"
                        class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Parque San Sebastian</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/cisne.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/cisne.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3"
                        title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Santuraio El Cisne</a></h4>
                      <p>El Cisne</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/jipiro.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2"
                        title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Parque Jipiro</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/sonesta.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/sonesta.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2"
                        title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Hotel Sonesta</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/Guayabal.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/Guayabal.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2"
                        title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Guayabal</a></h4>
                      <p>Catamayo</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/parque-Bolivar.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/parque-Bolivar.jpg" class="link-preview" data-lightbox="portfolio"
                        data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Parque Simón Bolívar</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/zamorano.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/zamorano.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1"
                        title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Zamorano Real Hotel</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/hotel-victoria.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/hotel-victoria.jpg" class="link-preview" data-lightbox="portfolio"
                        data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Grand Victoria Boutique Hotel</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/eolico.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/eolico.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1"
                        title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Parque Eólico Villonaco</a></h4>
                      <p>Loja</p>
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- #portfolio -->
      
      
          <!--==========================
            Services Section
          ============================-->
          <section id="services">
            <div class="container">
      
              <header class="section-header wow fadeInUp">
                <h3>Enlaces de Interés</h3>
              </header>
      
              <div class="row">
      
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                  <div class="icon"><img src="img/EnlacesInteres/universidad.png" class="img-fluid" alt=""></div>
                  <h4 class="title"><a href="https://www.utpl.edu.ec/">Universidad Técnica Particular de Loja</a></h4>
                  <p class="description">La UTPL es una institución autónoma con finalidad social y pública, imparte
                    enseñanza, desarrolla investigaciones con libertad científica administrativa, y participa en planes de
                    desarrollo del país.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                  <div class="icon"><img src="img/EnlacesInteres/ciudad-mitad-del-mundo.png" class="img-fluid" alt=""></div>
                  <h4 class="title"><a href="https://www.ecuador.com/">Ecuador</a></h4>
                  <p class="description">Ubicado en el noroeste de América del Sur, "Ecuador", cuando se traduce al inglés,
                    significa "ecuador". El ecuador pasa por Ecuador, así como por Colombia y Brasil en América del Sur.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                  <div class="icon"><img src="img/EnlacesInteres/ubicacion.png" class="img-fluid" alt=""></div>
                  <h4 class="title"><a href="https://ecuador.travel/es/">Ecuador Travel</a></h4>
                  <p class="description">¡Elige a Ecuador como el destino de tus vacaciones! Este bello país es un paraíso por
                    donde lo mires. Déjate deslumbrar por su cultura expresada en sus iglesias, edificaciones y ciudades
                    patrimoniales.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                  <div class="icon"><img src="img/EnlacesInteres/analitica.png" class="img-fluid" alt=""></div>
                  <h4 class="title"><a href="https://www.turismo.gob.ec/">Ministerio de Turismo de Ecuador</a></h4>
                  <p class="description">Somos el ente rector que planifica, gestiona, promociona, regula y controla, al
                    turismo sostenible del Ecuador.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                  <div class="icon"><img src="img/EnlacesInteres/guia-turistico.png" class="img-fluid" alt=""></div>
                  <h4 class="title"><a href="http://www.visitecuador.travel/">Visita Ecuador</a></h4>
                  <p class="description">Cómo viajar en Ecuador,a dónde ir,calendario cultural,destinos & rutas.<br>
                    Conoce experiencias de los viajeros en Ecuador !!</p>
                </div>
              </div>
      
            </div>
          </section><!-- #services -->
      
      
      
          <!--==========================
            Clients Section
          ============================-->
          <section id="clients" class="wow fadeInUp">
            <div class="container">
      
              <header class="section-header">
                <h3>Hoteles</h3>
              </header>
      
              <div class="owl-carousel clients-carousel">
                <img src="img/clients/hotel-QuoVadis.png" alt="">
                <img src="img/clients/hotel-sonesta.png" alt="">
                <img src="img/clients/hotel-libertador.png" alt="">
                
              </div>
      
            </div>
          </section><!-- #clients -->
      
        </main>
      
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
