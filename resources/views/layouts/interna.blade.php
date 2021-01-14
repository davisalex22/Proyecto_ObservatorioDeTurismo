<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Observatorio de Turismo UTPL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/adminlte.min.css">     
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="logo">
                <!--<h1><a href="#intro" class="scrollto">Observatorio de Turismo</a></h1>-->
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
            </nav>
        </div>
    </header>
    @yield('contenido')
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
    </footer>
    @yield('js')
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
    <script src="contactform/contactform.js"></script>
    <script src="js/main.js"></script>
    <script src="../vendor/adminlte/dist/js/adminlte.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>

    <script>
      $(function () {
        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data
    
        var sin = [],
            cos = []
        for (var i = 0; i < 14; i += 0.5) {
          sin.push([i, Math.sin(i)])
          cos.push([i, Math.cos(i)])
        }
        var line_data1 = {
          data : sin,
          color: '#3c8dbc'
        }
        var line_data2 = {
          data : cos,
          color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
          grid  : {
            hoverable  : true,
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor  : '#f3f3f3'
          },
          series: {
            shadowSize: 0,
            lines     : {
              show: true
            },
            points    : {
              show: true
            }
          },
          lines : {
            fill : false,
            color: ['#3c8dbc', '#f56954']
          },
          yaxis : {
            show: true
          },
          xaxis : {
            show: true
          }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
          position: 'absolute',
          display : 'none',
          opacity : 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function (event, pos, item) {
    
          if (item) {
            var x = item.datapoint[0].toFixed(2),
                y = item.datapoint[1].toFixed(2)
    
            $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
              .css({
                top : item.pageY + 5,
                left: item.pageX + 5
              })
              .fadeIn(200)
          } else {
            $('#line-chart-tooltip').hide()
          }
    
        })
        /* END LINE CHART */  
    
      })
    
      /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
          + label
          + '<br>'
          + Math.round(series.percent) + '%</div>'
      }
    </script>
</body>

</html>
