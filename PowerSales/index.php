<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PowerSales</title>
    <!-- core CSS -->
    <link href="./index/css/bootstrap.min.css" rel="stylesheet">
    <link href="./index/css/font-awesome.min.css" rel="stylesheet">
    <link href="./index/css/animate.min.css" rel="stylesheet">
    <link href="./index/css/owl.carousel.css" rel="stylesheet">
    <link href="./index/css/owl.transitions.css" rel="stylesheet">
    <link href="./index/css/prettyPhoto.css" rel="stylesheet">
    <link href="./index/css/main.css" rel="stylesheet">
    <link href="./index/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./index/js/html5shiv.js"></script>
    <script src="./index/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="./index/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./index/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./index/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./index/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./index/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body id="home" class="homepage">
    <header id="top-header" class="navbar-inverse navbar-fixed-top" style="background-color:rgb(27, 20, 82) ;" >
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
                
                <!-- logo -->
                <div class="navbar-brand">
                    <a class="smooth-scroll" data-section="#home" href="#home">
                        <img src="./index/images/" alt="">
                    </a>
                </div>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="scroll"><a href="index.php" style="color: white;">Inicio</a></li>
                        <li class="scroll"><a href="productos.html" style="color: white;">Productos</a></li>
                        <li class="scroll"><a href="contacto.html" style="color: white;">Contacto</a></li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
                 
        </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('#nav a');
        
            navLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    switch (link.textContent.trim()) {
                        case 'Inicio':
                            window.location.href = 'index.php';
                            break;
                        case 'Acerca de':
                            window.location.href = 'acercadenosotros.html';
                            break;
                        case 'Productos':
                            window.location.href = 'productos.html';
                            break;
                        case 'Servicios':
                            window.location.href = 'index.php#services';
                            break;
                        case 'Personal':
                            window.location.href = 'index.php#portfolio';
                            break;
                        case 'Contacto':
                            window.location.href = 'contacto.html';
                            break;
                        default:
                            window.location.href = link.getAttribute('href');
                            break;
                    }
                });
            });
        });
        </script>

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(./index/images/slider/minero.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>Tu mejor opcion minera <span>PowerSales</span>.</h2>
                                    <p>Somos una empresa dedicada a ofrecer los mejores servicios para nuestros clientes. 
                                        Nuestro equipo está altamente capacitado y listo para ayudarte en lo que necesites</p>
                                    <a class="btn btn-primary btn-lg" href="#">Leer mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(./index/images/slider/minero1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>Esperamos sastifacer todas tus necesidades <span>Siempre</span></h2>
                                    <p>Nuestra empresa le brinda el mejor servicio posible </p>
                                    <a class="btn btn-primary btn-lg" href="#">Productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div>
    </section>

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Bienvenido a nuestra empresa</h2>

            </div>

            <div class="row">
                

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Un poco mas sobre nosotros</h3>
                    <p>Somos una empresa minera nicaragüense dedicada a suministrar piezas y herramientas de alta calidad para el sector minero. Con sede en Nicaragua, nos enfocamos en ofrecer soluciones confiables y 
                        duraderas que ayuden a optimizar las operaciones mineras y mejorar la productividad de nuestros clientes.</p>

                    <p>Con un enfoque en la innovación y la sostenibilidad, buscamos no solo satisfacer las necesidades actuales del mercado, sino también contribuir al desarrollo de la minería responsable en Nicaragua.</p>



                </div>
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="./index/images/nos.jpg" alt="">
                </div>
            </div>
        </div>
    </section><!--/#about-->



    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Por que elegirnos?</h2>
                <p class="text-center wow fadeInDown">En nuestra empresa minera, nos enfocamos en ofrecer productos de alta calidad y un servicio al cliente excepcional, asegurando el mejor desempeño y confiabilidad para cada proyecto.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="./index/images/fin.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Calidad</h4>
                            <p>Piezas y herramientas resistentes, diseñadas para soportar condiciones extremas.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Asesoría Experta</h4>
                            <p>Contamos con un equipo especializado en minería, listo para brindar soluciones personalizadas.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Compromiso Ambiental</h4>
                            <p>Promovemos prácticas responsables y sostenibles en toda nuestra cadena de suministro.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Entrega Rápida y Eficiente</h4>
                            <p>Nos esforzamos por mantener inventarios actualizados para asegurar una entrega oportuna y minimizar tiempos de espera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">HACES UNA BUENA DECISION <span>BIENVENIDO</span></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Es un privilegio que estes aqui<br />Si algo es de tu interes , no dudes en contactarnos</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="./contacto.html">Contactanos</a></p>
            </div>
        </div>
    </section>

    <section id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Nuestro lema</h2>
            <p class="text-center wow fadeInDown">Vender no consiste en ser
                insistente, sino en preocuparte
                por las necesidades de tu
                cliente.</p>
        </div>

        <div class="row justify-content-center">
            <div class="features">
                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-bicycle"></i>
                        </div>
                        <h3 class="features-title font-alt">Mision</h3>
                        Proveer Soluciones Integrales en
                        repuestos y componentes de
                        calidad para sus equipos,
                        garantizando la continuidad
                        operativa de nuestros clientes, a
                        través de un servicio técnico y
                        eficiente, con repuestos confiables
                        que respondan a la exigencia del
                        sector
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <h3 class="features-title font-alt">Vision</h3>
                        Ser el líder en el suministro de
                        repuestos de alta calidad y
                        confiables, para la industria minera y
                        de construcción, impulsando la
                        productividad y eficiencia operativa
                        de nuestros clientes.                       
                     </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa  fa-diamond"></i>
                        </div>
                        <h3 class="features-title font-alt">Quienes somos?</h3>
                        Somos una empresa que forma parte del
                        desarrollo industrial Nicaragüense, inspirados por
                        la constante innovación en las maquinarias,
                        comprometidos por acompañar dando soluciones
                        efectivas y rápidas al precio más competitivo.<br>
                        Power Sales, Tu mejor opción!!                
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-connectdevelop"></i>
                        </div>
                        <h3 class="features-title font-alt">Cobertura de Productos y Logistica</h3>
                        -Repuestos esenciales.<br>
                        -Equipos de alta demanda.<br>
                        -Consumibles.<br>
                        -Repuestos especializados y a pedido.<br>
                        Respaldo de Garantía.<br>
                        Entregas de repuestos en sus instalaciones<br>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
        
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <h3 class="features-title font-alt">Diferenciadores</h3>
                        · Los mejores precios <br>
                        · Alta calidad a medida de la necesidad<br>
                        · Respuesta rápida y efectiva<br>
                        · Los mejores tiempos de entrega <br>
                        · Cobertura de Garantía estándar<br>
                        · Entrega en sus instalaciones<br>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="fa fa-key"></i>
                        </div>
                        <h3 class="features-title font-alt">Que ofertamos?</h3>
                        · Línea neumática: <br>
                        · Línea Hidráulica:-Repuestos para equipos de minería <br>
                        · Perforadoras<br>
                        · Implementos para excavadoras<br>
                        · Bandas y rodos para transportadoras<br>
                        · Bombas de agua-Repuestos automotrices <br>
                        · Repuestos para camiones y automóviles<br>
                    </div>
                </div>
            </div>
        </div><!--/.row-->    
    </div><!--/.container-->
</section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros Productos</h2>
                <p class="text-center wow fadeInDown">Contamos con un amplio inventario que incluye equipos de izaje, cajas de herramientas, y una gran variedad de piezas y herramientas esenciales para operaciones mineras. Nos aseguramos de tener lo que necesitas, cuando lo necesitas.</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Todos los productos</a></li>
              
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item animation">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="./index/images/portfolio/Izaje.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 1</h3>
                            <a class="preview" href="./index/images/portfolio/full.jpg" rel="prettyPhoto">
                                <img src="./index/images/portfolio/expand.png" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


                <div class="portfolio-item Business art">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="./index/images/portfolio/herramientas.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            <a class="preview" href="./index/images/portfolio/full.jpg" rel="prettyPhoto">
                                <img src="./index/images/portfolio/expand.png" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="./index/images/portfolio/epp.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            <a class="preview" href="./index/images/portfolio/full.jpg" rel="prettyPhoto">
                                <img src="./index/images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="./index/images/portfolio/calibrador.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            <a class="preview" href="./index/images/portfolio/full.jpg" rel="prettyPhoto">
                                <img src="./index/images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation art">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="./index/images/portfolio/multimetro.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            <a class="preview" href="./index/images/portfolio/full.jpg" rel="prettyPhoto">
                                <img src="./index/images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="./index/images/portfolio/comprension.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            <a class="preview" href="./index/images/portfolio/full.jpg" rel="prettyPhoto">
                                <img src="./index/images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->



    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                        &copy; 2024 Your Company. Designed and Developed by <a> Mamba </a>
                    </p>
                    
                    <ul class="social-icons text-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="./index/js/jquery.js"></script>
    <script src="./index/js/bootstrap.min.js"></script>
    <script src="./index/js/owl.carousel.min.js"></script>
    <script src="./index/js/mousescroll.js"></script>
    <script src="./index/js/jquery.prettyPhoto.js"></script>
    <script src="./index/js/jquery.isotope.min.js"></script>
    <script src="./index/js/jquery.inview.min.js"></script>
    <script src="./index/js/wow.min.js"></script>
    <script src="./index/js/main.js"></script>

    
    <?php include 'whatsapp.php'; ?>
</body>
</html>
