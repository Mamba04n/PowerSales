<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="e-commerce" content="Tincani empresa dedicada a la venta de materiales para la construcción">
    <meta name="author" content="Grupo 2- Rolling Code">

    <link href="./index/css/font-awesome.min.css" rel="stylesheet">
    <link href="./index/css/animate.min.css" rel="stylesheet">
    <link href="./index/css/owl.carousel.css" rel="stylesheet">
    <link href="./index/css/owl.transitions.css" rel="stylesheet">
    <link href="./index/css/prettyPhoto.css" rel="stylesheet">
    <link href="./index/css/responsive.css" rel="stylesheet">
    <link href="./index/css/main.css" rel="stylesheet">



    <!-- Bootstrap Core (libreria) CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Personalizados -->
    <link href="css/style-acercadenosotros.css/style-acercadenosotros.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cpwebassets.codepen.io/assets/icons/icon-font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-footer.css/style-footer.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
<!-- Core theme CSS (includes Bootstrap)-->


    <title>PowerSales</title>
</head>
<!--Comienzo del body o cuerpo-->

<body>
    <!--Nav Bar-->

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid ">
            <a href="./index.php">
                <img src="images/imagenes-navs/ " alt="Logo" class="rounded" width="70" height="65">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon white-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item ms-4">
                        <a class="nav-link active" aria-current="page" href="./login.html">Ingresar</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link active" aria-current="page" href="./acercadenosotros.html">Acerca de
                            Nosotros</a>
                    </li>

                    <li class="nav-item ms-4">
                        <a class="nav-link" href="./contacto.html">Contacto</a>
                    </li>

                    <li class="nav-item ms-4">
                        <a class="nav-link" href="./productos.html">Productos</a>
                    </li>

                    

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- /Nav Bar -->

    <!-- Otros contenidos de tu página -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('#nav a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                switch (link.textContent.trim()) {
                    case 'Acerca de Nosotros':
                        window.location.href = 'acercadenosotros.html';
                        break;
                    case 'Productos':
                        window.location.href = 'productos.html';
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
            <div class="item" style="background-image: url(./index/images/slider/minero3.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>Accesible y con un servicio de <span>Calidad</span>.</h2>
                                    <p>No te arrepentiras de nuestros productos</p>
                                    <a class="btn btn-primary btn-lg" href="#">Leer mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Bienvenido a nuestra empresa</h2>
                <p class="text-center wow fadeInDown">Somos una empresa dedicada a ofrecer los mejores servicios para nuestros clientes. <br>
                    Nuestro equipo está altamente capacitado y listo para ayudarte en lo que necesites</p>
            </div>

            <div class="row">
                

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Un poco mas sobre nosotros</h3>
                    <p>Somos una empresa minera nicaragüense dedicada a suministrar piezas y herramientas de alta calidad para el sector minero. Con sede en Nicaragua, nos enfocamos en ofrecer soluciones confiables y 
                        duraderas que ayuden a optimizar las operaciones mineras y mejorar la productividad de nuestros clientes.</p>

                    <p>Con un enfoque en la innovación y la sostenibilidad, buscamos no solo satisfacer las necesidades actuales del mercado, sino también contribuir al desarrollo de la minería responsable en Nicaragua.</p>

                    <a class="btn btn-primary" href="#">Discover Us</a>

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
                    <img class="img-responsive" src="./index/images/main-feature.png" alt="">
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
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Contactanos</a></p>
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-bicycle"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <h3 class="features-title font-alt">SEO Services</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-connectdevelop"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa  fa-diamond"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-key"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-paw"></i>
                            </div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->
</body>
</html>