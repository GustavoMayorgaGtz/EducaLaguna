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
        <link href='../../css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/hover-dropdown-menu.css" rel="stylesheet">
        <link href="../../css/icons.css" rel="stylesheet">
        <link href="../../css/revolution-slider.css" rel="stylesheet">
        <link href="../../rs-plugin/css/settings.css" rel="stylesheet">
        <link href="../../css/animate.min.css" rel="stylesheet">
        <link href="../../css/owl/owl.carousel.css" rel="stylesheet" >
        <link href="../../css/owl/owl.theme.css" rel="stylesheet" >
        <link href="../../css/owl/owl.transitions.css" rel="stylesheet" >
        <link href="../../css/prettyPhoto.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">
		<link href="../../css/responsive.css" rel="stylesheet">
        <link href="../../css/color.css" rel="stylesheet">
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
            session_start();
            if (!isset($_SESSION['login'])) {
                $_SESSION['login'] = false ;
                header("location:". $nav->host ."/Tabs/SubMediaDUR/M_Principal.php");
            }

            $nav->setTitle( 'Abuso Sexual Infantil' );
            $nav->setHaveLogout( true );
            $nav->setHaveDropdown( true );
            $nav->setHaveLogin(false);
            $nav->render();
            ?>
            <section class="page-section page-section-video">
                <div class="futuro-video"><p>(Video de presentación del protocolo)</p></div>
            </section>
            <!--Tabla de contenido-->
            <section class="page-section">
                <h4 style="  text-align: center; color: #2e9797; font-weight: bolder;">1. Protocolo de detección, prevención y actuación en casos de Abuso Sexual Infantil.</h4>
                <div class="container boxed-block" style="border-radius: 15px; text-align: center;">
                    <br>
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1QcywcrAn-Nhdz8RHYmyLdti20PgvKCXP/view">1.0. Protocolo De Detección, Prevención Y Actuación En Casos De Abuso Sexual Infantil. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1phIhC0iX__SzO9MOQPgWLi_iRa9bT2G-/view">1.1. Responsabilidades de Madres, Padres y Tutores Legales. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1TpIilHjCb1HwpIxBZzkU1EMwr_Od5RIH/view">1.2. Responsabilidades de Docentes. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1irdaAiObdjj77chpwkmJGHZ0Ry9j-x9I/view">1.3. Responsabilidades de Personal Administrativo, De Apoyo. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1EnSQ2lXeb185IbdhfKVRw2azUX5jEiSW/view">1.4. Responsabilidades de Personal de Servicios Educativos Complementarios. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1X72kPmY9Kb7a4u_5y2IH3ZXkWjQqzANu/view">1.5. Responsabilidades de Directivos Escolares. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/15rRQIlEk65lz55HlgX3RVFBz5T8rhAP5/view">1.6. Responsabilidades del Jefe de Sector y Supervisores(as). <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1eI6ngJQfwOx6pRpy6PCVdp3S-2xTveJm/view">1.7. Guía de observación para identificar indicadores de riesgo y detección en casos de abuso sexual infantil. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1ae-GLzJH-Hx3l2O6PiwNR5klybDL1GDx/view">1.8. Recomendaciones de actuación en casos de abuso sexual infantil. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1CIQ1kwwS-kfjSd8E7LZMOQ4dwX_fDFMh/view">1.9. Protocolo para la detección, prevención y actuación en casos de abuso sexual infantil. <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12" ><a href="https://drive.google.com/file/d/1aGbKpfL6qbGg-I9wbzBGXCdlZrSHohic/view">1.10.Diagrama de Flujo del Protocolo de Abuso Sexual Infantil (Infografía). <img  src="../../Resources/Usr/ad.png" alt="" width="100px" height="60px"></a></div>
                    </div>
                </div>
            </section>
            
            <!--Footer -->
            <footer id="footer">
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2023. Apoyo educativo.                            <br />
                            <a href="#">Terminos y Condiciones</a> / 
                            <a href="#">Politica y Privacidad</a></div>
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
        <script type="text/javascript"  src="../../js/owl.carousel.min.js"></script>
        <script type="text/javascript"  src="../../js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript"  src="../../js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript"  src="../../js/jquery.countTo.js"></script>
        <script type="text/javascript" src="../../js/tweet/carousel.js"></script>
        <script type="text/javascript" src="../../js/tweet/scripts.js"></script>
        <script type="text/javascript" src="../../js/tweet/tweetie.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="../../js/custom.js"></script>
    </body>
</html>