<!-- xd -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Principal</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Mist — Multi-Purpose HTML Template">
    <meta name="author" content="zozothemes.com">
    <meta name="viewport" conte-nt="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="rs-plugin/images/logoicon.png">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-dropdown-menu.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="rs-plugin/css/settings.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl/owl.carousel.css" rel="stylesheet">
    <link href="css/owl/owl.theme.css" rel="stylesheet">
    <link href="css/owl/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="components/navstyle.css">
</head>

<body>
    <div id="page">
        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin text-color"></div>
        </div>
        <!-- Header -->
        <?php
        require 'components/nav.php';
        $nav = new Nav();
        // session_start();
        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = false;
        }
        $nav->setHaveLogin(!$_SESSION['login']);
        $nav->setHaveLogout($_SESSION['login']);
        $nav->setHaveDropdown($_SESSION['login']);
        $nav->render();
        ?>
        <!-- Slider -->
        <section class="slider" id="home">
            <div id="main-slider">
                <div id="carousel-example-generic1" class="carousel slide carousel-fade" data-ride="carousel"
                    data-pause="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="headercontainer">
                                <div class="index-header">
                                    <img class="index-header-img" src="rs-plugin/images/secretario.jpeg" alt=""
                                        title="">
                                    <h1 class="upper animation animated-item-1"> Educalaguna.</h1>
                                    <p class="description  animation animated-item-2 hidden-sm hidden-xs">
                                        Pagina de internet de la Subsecretaria de Educacion de la Laguna de Durango <br>
                                        "Educalaguna"
                                        <br>
                                        "Presentacion del Subsecretario Dr. Ulises Adame de León"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Informacion-->
            <section class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id
                                    nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem
                                    consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores
                                    odio velit voluptate.</div>
                                <div class="col-sm-6 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id
                                    nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem
                                    consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores
                                    odio velit voluptate.</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id
                                    nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem
                                    consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores
                                    odio velit voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id
                                    nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem
                                    consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores
                                    odio velit voluptate.</div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id
                                    nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem
                                    consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores
                                    odio velit voluptate.</div>
                                <div class="col-sm-6 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id
                                    nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem
                                    consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores
                                    odio velit voluptate.</div>
                            </div>
                            <hr />
                        </div>
                        <div class="sidebar col-sm-12 col-md-3">

                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="title">Importante</h3>
                                </div>
                                <ul class="latest-posts">
                                    <li>
                                        <div class="post-thumb">
                                            <img class="img-rounded" src="rs-plugin/images/MediaDUR.jpg" alt="" title=""
                                                width="84" height="84" />
                                        </div>
                                        <div class="post-details">
                                            <div class="description">
                                                <a href="https://lagunasubsecretari.wixsite.com/mediadur">
                                                    <!-- Text -->
                                                    Sitio web MediaDURE wix.</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <img class="img-rounded" src="img/sections/blog/2.jpg" alt="" title=""
                                                width="84" height="84" />
                                        </div>
                                        <div class="post-details">
                                            <div class="description">
                                                <a href="#">
                                                    <!-- Text -->
                                                    The standard chunk of Lorem Ipsum used since.</a>
                                            </div>
                                            <div class="meta">
                                                <!-- Meta Date -->
                                                <span class="time">
                                                    <i class="fa fa-calendar"></i> 03.11.2014</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="title">Multimedia</h3>
                                </div>
                                <div class="owl-carousel navigation-1" data-pagination="false" data-items="1"
                                    data-autoplay="true" data-navigation="true">
                                    <iframe class="Video"
                                        src="https://www.youtube.com/embed/HM6qnRgyB_U?autoplay=1&mute=1&loop=1"
                                        title="MediaDUR Intro" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>


                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="title">Directorio</h3>
                                </div>
                            <div class="table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Puesto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MTRO. JAIRO SIGFRIDO CERON FRANCO</td>
                                            <td>DIRECTOR DE EDUCACION BASICA</td>
                                        </tr>
                                        <tr>
                                            <td>DR. CÉSAR MIRANDA GUARDADO</td>
                                            <td>JEFE DEL DEPARTAMENTO DE SERVICIOS EDUCATIVOS</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. FRANCISCO MONREAL GARCÍA</td>
                                            <td>COORDINADOR DE EDUCACION PRIMARIA</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. LAZARO CASTRO VALENZUELA</td>
                                            <td>SUBJEFE DE EDUCACION MEDIA SUPERIOR</td>
                                        </tr>
                                        <tr>
                                            <td>LIC. LEONCIO ORTIZ GOMEZ</td>
                                            <td>COORDINADOR DE PARTICIPACION SOCIAL</td>
                                        </tr>
                                        <tr>
                                            <td>MTRA. GLORIA ALICIA DÍAZ HURTADO</td>
                                            <td>COORDINADORA DE EDUCACION INICIAL</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. JOSE LUIS GALINDO ALMANZA</td>
                                            <td>SUBJEFE DE ESCS. SECS. TENICAS</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. JAIME SILVA MORALES</td>
                                            <td>SUBJEFE DE ESC.SEC.GENERALES</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. VÍCTOR HUGO OLIVAS ROCHA</td>
                                            <td>ENCARGADO DE LA SUBJEFATURA SECUNDARIA ESTATAL</td>
                                        </tr>
                                        <tr>
                                            <td>PROFRA. FRANCISCA BLANCO VILLANUEVA</td>
                                            <td>SUBJEFA DE EDUCACION PREESCOLAR</td>
                                        </tr>
                                        <tr>
                                            <td>C.P. ARTURO IBARRA FLORES</td>
                                            <td>COORDINADOR DE COOPERATIVAS ESCOLARES DE PRODUCCION Y DE CONSUMO</td>
                                        </tr>
                                        <tr>
                                            <td>PROFRA. MA. IDALIA DEL SOCORRO ESPINOZA MERAZ</td>
                                            <td>SUBJEFA DE EDUCACION ESPECIAL</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. JUAN EFREN NUÑEZ LANDEROS</td>
                                            <td>COORDINADOR DE EDUCACION FISICA</td>
                                        </tr>
                                        <tr>
                                            <td>MARIA CONCEPCIÓN BENÍTEZ MARTÍNEZ</td>
                                            <td>RESP. DEL NIVEL DE PRIMARIA ESTATAL</td>
                                        </tr>
                                        <tr>
                                            <td>MTRA. LAURA ESTELA GARCÍA GALVÁN</td>
                                            <td>RESP. DEL NIVEL DE PREEESCOLAR ESTATAL</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. DANIEL GONZÁLEZ MENA</td>
                                            <td>COORDINAROD E CEDEX Y MISIONES CULTURALES</td>
                                        </tr>
                                        <tr>
                                            <td>DR. GERARDO DE JESÚS GARCA ROSALES</td>
                                            <td>CIIDE SAN ISIDRO “PROFR. JOSÉ SANTOS VALDÉS”</td>
                                        </tr>
                                        <tr>
                                            <td>MTRA. ELIDA ELIZARRARAS RAMÍREZ </td>
                                            <td>CIIDE TORREMOLINOS “JOSÉ VASCONCELOS”</td>
                                        </tr>
                                        <tr>
                                            <td>DRA. ERIKA COLÓN RUEDA</td>
                                            <td>CIIDE MIGUEL DE LA MADRID “HERMILA GALINDO ACOSTA”</td>
                                        </tr>
                                        <tr>
                                            <td>PROFR. ELIAZAR ISAÍAS PRINCE ALMARAZ</td>
                                            <td>CIIDE VALLE DE CHAPALA “JOSE REVUELTAS”</td>
                                        </tr>
                                        <tr>
                                            <td>DRA. CONCEPCIÓN DEL SOCORRO MEDRANO MADRILES</td>
                                            <td>COORDINACION GENERAL DEL CENTRO DE INVESTIGACION E NNOVACIÓN PARA EL DESARROLLO EDUCATIVO (CIIDE)</td>
                                        </tr>
                                        <tr>
                                            <td>ING. ANDRES MADRID ESCOBEDO</td>
                                            <td>DIRECTOR DE ADMINISTRACION Y PLANEACION</td>
                                        </tr>
                                        <tr>
                                            <td>M.A.F. Y M.E.D. ROMAN ABEL RAMOS GARCÍA</td>
                                            <td>JEFE DEL DEPARTAMENTO DE SERVICIOS ADMINISTRATIVOS</td>
                                        </tr>
                                        <tr>
                                            <td>M.E. DULCE ARGENTINA BONILLA DÁVILA</td>
                                            <td>JEFA DEL DEPARTAMENTO DE PLANEACION EDUCACTIVA</td>
                                        </tr>
                                        <tr>
                                            <td>ING. FRACISCO JAVIER RODRÍGUEZ VILLA</td>
                                            <td>SUBJEFE DE RECURSOS HUMANOS</td>
                                        </tr>
                                        <tr>
                                            <td>C.P. MARIA DE LOS ANGELES DE AVILA RAMOS</td>
                                            <td>SUBJEFA DE RECURSOS FINANCIEROS</td>
                                        </tr>
                                        <tr>
                                            <td>C. ELIZABETH MARTINEZ JIMENEZ</td>
                                            <td>SUBJEFE DE NOMINA Y DISTRIBUCION DE CHEQUES</td>
                                        </tr>
                                        <tr>
                                            <td>C. RENÉ GONZÁLEZ MUÑOZ</td>
                                            <td>SUBJEFE DE RECURSOS MATERIALES Y SERVICIOS</td>
                                        </tr>
                                        <tr>
                                            <td>ARQ. JESÚS ESPINO MARTÍNEZ</td>
                                            <td>ENCARGADO DE LA SUBJEFATURA DE PROGRAMACION </td>
                                        </tr>
                                        <tr>
                                            <td>ING. LILIANA MARÍA RODRÍGUEZ IBARRA</td>
                                            <td>ENCARGADA DE LA SUBJEFATURA DE REGISTRO Y CERTIFICACION ESCOLAR</td>
                                        </tr>
                                        <tr>
                                            <td>ING. ANTONIO VILLAGRANA CARRAZCO</td>
                                            <td>SUBJEFE DE SEGUIMIENTO DE OBRA Y EQUIPAMIENTO ESCOLAR</td>
                                        </tr>
                                        <tr>
                                            <td>ING. ADRIANA QUEVEDO GÓMEZ</td>
                                            <td>SUBJEFA DE INFORMÁTICA ADMINISTRATIVA</td>
                                        </tr>
                                        <tr>
                                            <td>C.P. FLOR LILIANA ROSALES</td>
                                            <td>RESP. DE ANTEPROYECTO DEL PRESUPUESTO Y PROGRAMA OPERATIVO ANUAL (POA)</td>
                                        </tr>
                                        <tr>
                                            <td>MTRA. CLAUDIA YAZMIN GARCÍA ESCAREÑO</td>
                                            <td>ENCARGADA DE USICAMM</td>
                                        </tr>                    
                                        <!-- Agrega más filas según sea necesario -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!--Peronal Aministrativo-->
            <section id="related-projects" class="page-section">
                <div class="containerpersonal">
                    <div class="overlay-strips"></div>
                </div>
                <div class="container black">
                    <div class="section-title">
                        <!-- Heading -->
                        <h2 class="title">Subsecretaria de educacion</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="owl-carousel pagination-1 dark-switch text-center " data-pagination="true"
                                data-autoplay="true" data-navigation="false" data-items="3">
                                <div class="item">
                                    <p><br>Secretario de Educación en el Estado de Durango.</p>
                                    <div class="client-image">
                                        <!-- Image -->
                                        <img class="img-circle" src="Resources/Usr/user.png" width="80" height="80"
                                            alt="">
                                    </div>
                                    <div class="client-details text-center">
                                        <div class="client-details">
                                            <!-- Name -->
                                            <strong class="text-color2">DR. JOSÉ GUILLERMO ADAME CALDERÓN</strong>
                                            <!-- Company -->
                                            <p>Secretaría de Educación del Estado de Durango.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p><br>Subsecretario de Educación en la Región Laguna.</p>
                                    <div class="client-image">
                                        <!-- Image -->
                                        <img class="img-circle" src="Resources/Usr/user.png" width="80" height="80"
                                            alt="">
                                    </div>
                                    <div class="client-details text-center">
                                        <div class="client-details">
                                            <!-- Name -->
                                            <strong class="text-color2">DR. FERNANDO ULISES ADAME DE LEÓN</strong>
                                            <!-- Company -->
                                            <p>Secretaría de Educación del Estado de Durango.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <div class="footer-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 widget bottom-xs-pad-20">
                                <div class="widget-title">
                                    <h3 class="title">Acerca de nosotros</h3>
                                </div>
                                <p>Establecer criterios de actuación y atención al interior de las escuelas de Educación
                                    Básica, que fortalezcan los mecanismos de prevención en la generación de ambientes
                                    escolares propicios para el aprendizaje, salvaguardando la integridad física y
                                    psicológica de la comunidad escolar, apegado a los derechos humanos.</p>
                                <p>
                                    <strong>Office:</strong>
                                    <br />No. 12, Ribon Building,
                                    <br />Gomez Palacio, Mx.
                                </p>
                                <p>
                                    <strong>Contactanos:</strong> +52 (871) 2-34-25-50
                                </p>
                                <div class="social-icon gray-bg icons-circle i-3x">
                                    <a href="https://www.facebook.com/MediaDUR/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/MediaDur_@">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 widget">
                                <div class="widget-title">
                                    <h3 class="title">Ultimas noticias</h3>
                                </div>
                                <nav>
                                    <ul class="footer-blog">
                                        <li>
                                            <p>Sitio web</p>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat
                                                officia eius quo tenetur dolor!</p>
                                        </li>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla
                                                ullam vel velit harum distinctio.</p>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 widget">
                                <div class="widget-title">
                                    <h3 class="title">Envianos un mensaje</h3>
                                </div>
                                <p class="form-message" style="display: none;"></p>
                                <div class="contact-form">
                                    <form role="form" name="contactform" id="contactform" method="post"
                                        action="php/contact-form.php">
                                        <div class="input-text form-group">
                                            <input type="text" name="contact_name" class="input-name form-control"
                                                placeholder="Full Name" />
                                        </div>
                                        <div class="input-email form-group">
                                            <input type="email" name="contact_email" class="input-email form-control"
                                                placeholder="Email" />
                                        </div>
                                        <div class="textarea-message form-group">
                                            <textarea name="contact_message" class="textarea-message form-control"
                                                placeholder="Message" rows="3"></textarea>
                                        </div>
                                        <button class="btn btn-default" type="submit">Enviar
                                            <i class="icon-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-->
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <br />
                            <a href="#">Terminos y Condiciones</a> /
                            <a href="#">Politica y Privacidad</a>
                        </div>
                        <div class="col-xs-2  col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                            <a href="#page">
                                <i class="glyphicon glyphicon-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
    </div>
    </footer>

    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown-menu.js"></script>
    <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolution-custom.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/effect.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/tweet/carousel.js"></script>
    <script type="text/javascript" src="js/tweet/scripts.js"></script>
    <script type="text/javascript" src="js/tweet/tweetie.min.js"></script>
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>