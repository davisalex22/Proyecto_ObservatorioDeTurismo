<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Observatorio de Turismo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage - v3.2.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @yield('header')

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
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Estadísticas</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Lugares Turísticos</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Contactos</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Contactos</h4>
                        <strong>Dirección:</strong> Marcelino Champagnat s/n<br><br>
                        <strong>Email:</strong> apludena@utpl.edu.ec<br><br>
                        <strong>Teléfono:</strong> +593 3701444<br><br>
                        <strong>Email:</strong> resanchez@utpl.edu.ec<br>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Redes Sociales</h4>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
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
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="../vendor/adminlte/dist/js/adminlte.min.js"></script>
    
    <script src="../vendor/jquery-knob/jquery.knob.min.js"></script>
    <script>
    $(function() {
        /* jQueryKnob */

        $('.knob').knob({
            /*change : function (value) {
             //console.log("change : " + value);
             },
             release : function (value) {
             console.log("release : " + value);
             },
             cancel : function () {
             console.log("cancel : " + this.value);
             },*/
            draw: function() {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a = this.angle(this.cv) // Angle
                        ,
                        sa = this.startAngle // Previous start angle
                        ,
                        sat = this.startAngle // Start angle
                        ,
                        ea // Previous end angle
                        ,
                        eat = sat + a // End angle
                        ,
                        r = true

                    this.g.lineWidth = this.lineWidth

                    this.o.cursor &&
                        (sat = eat - 0.3) &&
                        (eat = eat + 0.3)

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.value)
                        this.o.cursor &&
                            (sa = ea - 0.3) &&
                            (ea = ea + 0.3)
                        this.g.beginPath()
                        this.g.strokeStyle = this.previousColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                        this.g.stroke()
                    }

                    this.g.beginPath()
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                    this.g.stroke()

                    this.g.lineWidth = 2
                    this.g.beginPath()
                    this.g.strokeStyle = this.o.fgColor
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth *
                        2 / 3, 0, 2 * Math.PI, false)
                    this.g.stroke()

                    return false
                }
            }
        })
        /* END JQUERY KNOB */

        //INITIALIZE SPARKLINE CHARTS
        var sparkline1 = new Sparkline($('#sparkline-1')[0], {
            width: 240,
            height: 70,
            lineColor: '#92c1dc',
            endColor: '#92c1dc'
        })
        var sparkline2 = new Sparkline($('#sparkline-2')[0], {
            width: 240,
            height: 70,
            lineColor: '#f56954',
            endColor: '#f56954'
        })
        var sparkline3 = new Sparkline($('#sparkline-3')[0], {
            width: 240,
            height: 70,
            lineColor: '#3af221',
            endColor: '#3af221'
        })

        sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
        sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
        sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

    })
    </script>
    <script>
    $(function() {
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
            data: sin,
            color: '#3c8dbc'
        }
        var line_data2 = {
            data: cos,
            color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis: {
                show: true
            },
            xaxis: {
                show: true
            }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
            position: 'absolute',
            display: 'none',
            opacity: 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2)

                $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                    .css({
                        top: item.pageY + 5,
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
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>'
    }
    </script>
    

</body>

</html>