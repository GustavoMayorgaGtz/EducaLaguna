<!--        View full     -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MediaDUR

    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Mist — Multi-Purpose HTML Template">
    <meta name="author" content="zozothemes.com">
    <meta name="viewport" conte-nt="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../rs-plugin/images/logoicon.png">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='../../css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/hover-dropdown-menu.css" rel="stylesheet">
    <link href="../../css/icons.css" rel="stylesheet">
    <link href="../../css/revolution-slider.css" rel="stylesheet">
    <link href="../../rs-plugin/css/settings.css" rel="stylesheet">
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/owl/owl.carousel.css" rel="stylesheet">
    <link href="../../css/owl/owl.theme.css" rel="stylesheet">
    <link href="../../css/owl/owl.transitions.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link href="../../css/color.css" rel="stylesheet">
    <link rel="stylesheet" href="./mediadur.css">
    <link rel="stylesheet" href="./style/M_principalstyle.css">
    <link rel="stylesheet" href="../../components/navstyle.css">
</head>

<body>
    <div id="page">
        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin text-color"></div>
        </div>

        <!-- Header -->
        <?php
        require_once '../../components/nav.php';
        $nav = new Nav();
        $nav->setTitle('Protocolos de Actuación');
        $nav->setHaveLogout(true);
        $nav->setHaveDropdown(true);

        $nav->render();
        $nav->setHaveLogin(false);
        ?>
        <!-- page-section -->
        <div class="section">


        <div class="grid-container">
                        <div class=".index-header-img">
                            <video id="myVideo" src="../../rs-plugin/images/MediaDUR.mp4" class="index-header-img-vid" autoplay muted  ></video>
                            <img id="myImage" class="index-header-img-vid hidden" src="../../rs-plugin/images/MediaDUR.png" alt="" title="">
                        </div>
                        <script>
        var video = document.getElementById("myVideo");
        var image = document.getElementById("myImage");

        video.addEventListener('ended', function() {
            video.style.display = "none";  // Oculta el video
            image.classList.remove("hidden"); // Muestra la imagen quitando la clase 'hidden'
            image.classList.add("fade-in"); // Agrega la clase 'fade-in' para activar la animación
        });
    </script>
                    <div class="container-information">
            <a href="#" class="toggle-information">Anexos:</a>
            <div class="information-content ">
                <p>Los Protocolos de Actuación MediaDUR surgieron como propuesta de intervención derivada de
                    la investigación Protocolos de Actuación en Materia de Convivencia en Educación Básica
                    con Folio: 2020_UJV_INV_64, desarrollada por el Dr. Gerardo de J. Garza Rosales de la
                    Unidad del CIIDE “Profr. José Santos Valdés” de Lerdo, Durango. En colaboración con el
                    Lic. Leoncio Ortiz López Coordinador del departamento de Participación Social de la
                    Subsecretaría se implementó MediaDUR en el sitio educalaguna.
                    MediaDUR busca ser un concepto diferente en el proceso informativo del docente, a través
                    de medios digitales.
                </p>
            </div>
        </div>
        <div></div>
            </div>

            <section class="menu-protocol">
                <div class="card-menu-protocol option1">
                    <a style="accionarcadena" href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_AbSxInf.php">
                        <div class="container-img">
                           <img src="./resources/abuse.jpg" alt="" class="iconoption">
                     </div>
                    
                        <div class="title-menu-protocol">
                        Abuso sexual infantil
                        </div>
                     </a>
                </div>

                <div class="card-menu-protocol option2">
                <a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_AcEs.php">
                    <div class="container-img">
                        <img src="./resources/acoso.png" alt="" class="iconoption">
                    </div>
                    <div class="title-menu-protocol">
                        Acoso escolar
                    </div>
                    </a>
                </div>

                <div class="card-menu-protocol option3">
                <a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_MaIn.php">
                    <div class="container-img">
                        <img src="./resources/boy.png" alt="" class="iconoption">
                    </div>
                    <div class="title-menu-protocol">
                        Maltrato infantil
                    </div>
                </a>
                </div>

                <div class="card-menu-protocol option4">
                <a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_MoSe.php">
                    <div class="container-img">
                        <img src="./resources/bag.png" alt="" class="iconoption">
                    </div>
                    <div class="title-menu-protocol">
                    Mochila segura
                    </div>
                </a>
                </div>

            </section>
            <!-- <div class="container">
                <ul class="lista-links">
                    <li class="opcions"><a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_AbSxInf.php">Abuso Sexual
                            Infantil</a></li>
                    <li class="opcions"><a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_AcEs.php">Acoso
                            Escolar</a></li>
                    <li class="opcions"><a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_MaIn.php">Maltrato
                            Infantil</a></li>
                    <li class="opcions"><a href="<?php echo $nav->host; ?>/Tabs/SubMediaDUR/M_MoSe.php">Mochila
                            segura</a></li>
                </ul>
            </div> -->
        </div>
        <!--Footer -->
        <footer id="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2023. Apoyo educativo. <br />
                            <br />
                            <a href="https://educacion.durango.gob.mx/">© 2023 | Secretaría de Educación del Estado de
                                Durango |</a>
                            <a href="https://www.lerdo.tecnm.mx/">Tecnológico Nacional de México campus Lerdo</a>
                            <a href="/Tabs/creditos.php"> | Creditos Equipo de Trabajo</a>
                        </div>
                        <div class="col-xs-2  col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                            <a href="#page">
                                <i class="glyphicon"><img src="../../rs-plugin/images/up-arrow.png" style="justify-content: flex-start;"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/hover-dropdown-menu.js"></script>
    <script type="text/javascript" src="../../js/jquery.hover-dropdown-menu-addon.js"></script>
    <script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../../js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../../js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="../../rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../../rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../../js/revolution-custom.js"></script>
    <script type="text/javascript" src="../../js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/effect.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="../../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../../js/tweet/carousel.js"></script>
    <script type="text/javascript" src="../../js/tweet/scripts.js"></script>
    <script type="text/javascript" src="../../js/tweet/tweetie.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="../../js/custom.js"></script>
</body>

</html>