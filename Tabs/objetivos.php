<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Acerca de</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Mist — Multi-Purpose HTML Template">
    <meta name="author" content="zozothemes.com">
    <meta name="viewport" conte-nt="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../rs-plugin/images/logoicon.png">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='../css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/hover-dropdown-menu.css" rel="stylesheet">
    <link href="../css/icons.css" rel="stylesheet">
    <link href="../css/revolution-slider.css" rel="stylesheet">
    <link href="../rs-plugin/css/settings.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/owl/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl/owl.theme.css" rel="stylesheet">
    <link href="../css/owl/owl.transitions.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/color.css" rel="stylesheet">
    <link rel="stylesheet" href="objetivosStyles.css">
    <link href="../components/navstyle.css" rel="stylesheet">
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
        require '../components/nav.php';
        $nav = new Nav();
        $nav->setTitle('SEED');

        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = false;
        }
        $nav->setHaveLogin(!$_SESSION['login']);
        $nav->setHaveLogout($_SESSION['login']);
        $nav->setHaveDropdown($_SESSION['login']);
        $nav->render();
        ?>
        ?>

        <!-- RELLENO-->
        <section class="page-section">
            <div class="container ">
            <div class="obj_design" >
                <h4 
                   style="color: rgb(42, 42, 46); font-weight: bold;">Misión</h4>

                <div class="row">
                    <div class="col-md-12" style="text-align:justify;"> 
                    <p class="description  animation animated-item-2 hidden-sm hidden-xs opcions">
                    Ofrecer una educación de calidad, integral, participativa,
                        innovadora y promotora del aprendizaje que nos permita formar personas comprometidas con
                        el desarrollo sostenible, capaces de elevar su nivel de vida, el desarrollo personal y la
                        formación de capital humano,
                        que contribuya al impulso del desarrollo económico y social del Estado. 
                    </div></div>
                    
                </div>
                <br>
                <div class="obj_design" >
                <h4 style="color: rgb(42, 42, 46); font-weight: bold;">Visión</h4>

                <div class="row">
                    <div class="col-md-12" style="text-align:justify;">
                        Ser un sistema educativo sólido, con una educación para todos, con sentido humano y social,
                        que orienta su actuación bajo el impulso de la equidad, la rendición de cuentas,
                        la transparencia y ofrece servicios educativos, administrativos con eficiencia, calidad y
                        pertinencia.
                    </div>
                </div>
                </div>
                <br>
                <div class="obj_design" >
                <h4 style="color: rgb(42, 42, 46); font-weight: bold;">Objetivos</h4>

                <div class="row">
                    <div class="col-md-12" style="text-align:justify;">
                        <p>La Secretaría de Educación, instancia rectora de la política educativa, posee una actividad
                            funcional que considera la planeación, operación y control de actividades diversas, cuya
                            conducción está a cargo de un equipo humano multidisciplinario, que labora en espacios
                            físicos variados, integrando un conjunto de fuerzas en movimiento. Ha operado con elevados
                            niveles de efectividad, para ofrecer el servicio educativo con calidez humana.</p>
                        <br>
                        <p>Tiene establecidos tanto planes estratégicos como planes operativos, metas generales, visión y
                            misión. Los proyectos estratégicos, diseñados para alcanzar los objetivos y las metas,
                            muestran cómo se pueden aplicar en el quehacer cotidiano, están ligados a la definición de
                            la misión de la Dependencia, el objetivo general que justifica su existencia.</p>
                        <br>
                        <p>Indudablemente, las metas son elementos fundamentales en la operatividad de la Secretaría,
                            que se perfilan a un futuro deseable, proporcionan sentido de dirección, concentran
                            esfuerzos, guían planes y decisiones; sirven para evaluar los avances. El grado en que se
                            alcancen las metas, depende del desempeño de los directivos, así como de la eficacia de
                            quienes coordinan las acciones de los niveles operativos.</p>
                    </div>
                </div>
                </div>
                <br>
        </section>
        <section class="container-interes">
            <!-- ENLACES DE INTERES -->
            <span class="interes-subtitle">Enlaces de <span class="interes-span">Interés</span></span>
            <div class="container-grid-opciones">
                <img class="img-interes" onclick="window.location.href='https://contraloria.durango.gob.mx/'"
                    src="../rs-plugin/images/SECOED.svg">
                <img class="img-interes" onclick="window.location.href='https://home.inai.org.mx/'"
                    src="../rs-plugin/images/INAI.png">
                <img class="img-interes" onclick="window.location.href='https://www.plataformadetransparencia.org.mx/'"
                    src="../rs-plugin/images/plataformaNacional.png">
                <img class="img-interes" onclick="window.location.href='https://idaip.org.mx/sitio/'"
                    src="../rs-plugin/images/IDAIP.png">
            </div>
        </section>


        <div class="page-header" style="background-color: #808080; ">
            <div class="container" style="display: block; text-align: center; width: auto;">
                <!-- <img src="../Resources/Logos/CIIDE_BackGray.png" width="350" style="margin-right: 25px;"> -->
                <img src="../rs-plugin/images/SEED.svg" width="250" style="margin-left: 25px;">
            </div>
        </div>

        <!--Footer -->
        <footer id="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2021 <a href="http://deciide.com.mx">deciide.com.mx</a>. Apoyo educativo. -->
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

    <!-- Scripts -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/hover-dropdown-menu.js"></script>
    <script type="text/javascript" src="../js/jquery.hover-dropdown-menu-addon.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="../rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../js/revolution-custom.js"></script>
    <script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../js/effect.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../js/tweet/carousel.js"></script>
    <script type="text/javascript" src="../js/tweet/scripts.js"></script>
    <script type="text/javascript" src="../js/tweet/tweetie.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
</body>

</html>