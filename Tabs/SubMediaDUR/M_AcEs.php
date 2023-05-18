<?php
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MediaDUR</title>
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
    <link href="../../components/navstyle.css" rel="stylesheet">
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

        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = false;
            header("location:" . $nav->host . "/Tabs/SubMediaDUR/M_Principal.php");
        }
        $nav->setTitle('Acoso Escolar');
        $nav->setHaveLogout(true);
        $nav->setHaveDropdown(true);
        $nav->setHaveLogin(false);
        $nav->render();
        ?>
        <section class="page-section page-section-video">
            <div class="futuro-video">
                <p><iframe width="731" height="411" src="https://www.youtube.com/embed/Tn14pS8lS6c?autoplay=1&loop=1" title="Responsabilidad de Madres y Padres Protocolos de Actuación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; loop" allowfullscreen></iframe></p>
            </div>
        </section>
        <h4 style="text-align: center; font-weight: bolder">
                Madres, Padres y Tutores Legales | Docentes | Personal Administrativo de Apoyo | Directivos
            </h4>
        <!--Tabla de contenido-->
        <section class="page-section">
            <h4 style="  text-align: center; "><a style="color: #2e9797; font-weight: bolder;"
                    href="https://drive.google.com/file/d/1nTJ5NIcEt8ToJBBgna-PZgIIFf7IK-Gb/view">2. Protocolo de
                    detección, prevención y actuación
                    en casos de Acoso Escolar. </a>
            </h4>

            <div class="container boxed-block" style="border-radius: 15px; text-align: center;">

                <ul class="container-imagenes">
                    <div class="card">
                        <a href="https://drive.google.com/file/d/1OW7cY0KIsSMnf8JNHo50wu9T8D7gzyBW/view">  Protocolo
                            de detección, prevención y actuación en casos de Acoso Escolar.</a>
                        <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/deteccion.png">
                        </div>
                    </div>

                    <div class="card">
                       <a href="https://drive.google.com/file/d/1gsGN8kKqGCyv6ojtoZEfppRgrtdIU6rg/view">Responsabilidades de Comunidad Escolar.</a>
                       <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/social.png"></div>
                    </div>

                    <!-- <div class="card">
                        <a href="https://drive.google.com/file/d/1eBtxhbxlg3HTyXJtrOQrS7Wyvx3oJQ3Y/view"> Responsabilidades de Madres, Padres y Tutores Legales.</a> 
                        <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/padre-e-hijo.png"></div>                        
                    </div> -->

                    <!-- <div class="card">
                        <a href="https://drive.google.com/file/d/1G4T8aqH55GBccn8-fDJejLSTOQ-MsHql/view">
                                Responsabilidades de los Docentes.</a><div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/masculino.png"
                                   ></div>
                    </div> -->

                    <div class="card">
                        <a href="https://drive.google.com/file/d/1VRZ5zAuj4TPgodBln2QH5NpK52fJuFMu/view">
                                Responsabilidades del Personal Administrativo, De Apoyo.</a><div class="container-img"><img class="imagen-card"
                                    src="../../rs-plugin/images/apoyo.png"></div>
                    </div>

                    <div class="card">
                        <a href="https://drive.google.com/file/d/1v5pf32RhFrTZMua6i7xt125iIOPecEmI/view">
                                Responsabilidades del Personal de Servicios Educativos Complementarios.</a><div class="container-img"> <img class="imagen-card"
                                    src="../../rs-plugin/images/femenino.png">
                        </div>
                    </div>

                    <!-- <div class="card">
                        <a href="https://drive.google.com/file/d/1ck6Ouyu4SX6v_d5TdGA9CaLSIEFsQNfm/view">
                                Responsabilidades de Directivos Escolares.</a><div class="container-img"> <img class="imagen-card"
                                    src="../../rs-plugin/images/equipo.png" ></div>
                    </div> -->


                    <!-- <div class="card">
                        <a href="https://drive.google.com/file/d/1dAAia1ntWTFfJ2YNWaUTIz2anq3uUa-c/view">
                                Responsabilidades de los Jefe de Sector y Supervisores(as).</a><div class="container-img"> <img class="imagen-card"
                                    src="../../rs-plugin/images/gerente.png">
                        </div>
                    </div> -->

                    <div class="card">
                        <a
                                href="https://drive.google.com/file/d/1MzXoyftyFr9aaGyrKVMy63XkoicQFvIE/view">Guía
                                de observación para identificar indicadores de riesgo y detección en casos de acoso
                                escolar.</a><div class="container-img"> <img class="imagen-card" src="../../rs-plugin/images/identificar.png" ></div>
                    </div>

                    <div class="card">
                        <a href="https://drive.google.com/file/d/1f_TQ6KNnDPM3HNEjbySh5DKTyyGaqQDv/view">                                Protocolo para la detección, prevención y actuación en casos de acoso escolar.</a><div class="container-img"> <img class="imagen-card"
                                    src="../../rs-plugin/images/seguro.png" alt="" width="40px" height="20px"></div>
                    </div>

                    <div class="card">
                        <a href="https://drive.google.com/file/d/1UOsM99YyojoRFIFYZkKHDNz4y9lZT82q/view">
                                Diagrama de Flujo del Protocolo de Acoso Escolar (Infografía).</a><div class="container-img"> <img class="imagen-card"
                                    src="../../rs-plugin/images/flujo-de-trabajo.png" ></div>
                    </div>
                </ul>




            </div>

        </section>

        <!--Footer -->
        <footer id="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2023. Apoyo educativo. <br />
                            <br />
                            <a href="#">Terminos y Condiciones</a> /
                            <a href="#">Politica y Privacidad</a>
                        </div>
                        <div class="col-xs-2  col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                            <a href="#page">
                                <i class="fi fi-br-caret-up"></i>
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