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
            <div class="container-information">
            <p>Los Protocolos de Actuación <b>MediaDUR</b> surgierón como propuesta de intervención derivada de la investigación <b>Protocolos de Actuación en Materia de Convivencia en Educación Básica</b> con <b>Folio: 2020_UJV_INV_64</b>, desarrollada por el <b>Dr. Gerardo de J. Garza Rosales</b> de la <b>Unidad del CIIDE “Profr. José Santos Valdés”</b> de Lerdo, Durango.
</p>
<p> <b>MediaDUR</b> busca ser un concepto diferente en el proceso informativo del docente, a traves de medios digitales</p>
            </div>

            <div class="container">
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
            </div>
        </div>
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
                                <i class="glyphicon glyphicon-arrow-up"></i>
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