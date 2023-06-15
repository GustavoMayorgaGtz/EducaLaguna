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
                $_SESSION['login'] = false ;
            }
            $nav->setTitle( 'Maltrato Infantil' );
            $nav->setHaveLogout( true );
            $nav->setHaveDropdown( true );
            $nav->setHaveLogin(false);
            $nav->render();
            ?>
            <section class="page-section page-section-video">
                <div class="futuro-video"><p><iframe width="731" height="411" src="https://www.youtube.com/embed/FuQjxQhrR38" title="Maltrato Infantil Protocolos de Actuación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p></div>
            </section>
            <!-- <h4 style="text-align: center; font-weight: bolder">
                Madres, Padres y Tutores Legales | Docentes | Personal Administrativo de Apoyo | Directivos
            </h4> -->

            <!--Tabla de contenido-->
            <section class="page-section">
                <h4 style="  text-align: center;"><a style="color: #2e9797; font-weight: bolder;" href="https://drive.google.com/file/d/1L6vBmQt0--a6XXPvy9e2nSiBptMyPFCw/view" >3. Protocolo de detección, prevención y actuación en casos de Maltrato Infantil.</a></h4>
                <div class="container boxed-block" style="border-radius: 15px; text-align: center;">
                    <br>
                    <ul class="container-imagenes">
                        <div class="card">
                            <a href="https://drive.google.com/file/d/1L6vBmQt0--a6XXPvy9e2nSiBptMyPFCw/view">Protocolo de detección, prevención y actuación en casos de Maltrato Infantil. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/deteccion.png">
                            </div>
                        </div>

                         <div class="card">
                        <a href="./Informacion/protocol.php?menu=41">3.1 Responsabilidades de Madres, Padres y Tutores Legales. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/familia.png">
                            </div>
                        </div> 

                        <div class="card">
                        <a href="./Informacion/protocol.php?menu=42">3.2 Responsabilidades de los Docentes. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/profesor.png">
                            </div>
                        </div> 

                         <div class="card">
                        <a href="./Informacion/protocol.php?menu=43">3.3 Responsabilidades de Personal Administrativo, De Apoyo. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/support.png">
                            </div>
                        </div> 

                        <div class="card">
                        <a href="./Informacion/protocol.php?menu=44">3.4 Responsabilidades del Personal de Servicios Educativos Complementarios. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/teacher.png">
                            </div>
                        </div>

                        <div class="card">
                        <a href="./Informacion/protocol.php?menu=45">3.5 Responsabilidades de Directivos Escolares. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/equipo.png">
                            </div>
                        </div>

                         <div class="card">
                        <a href="./Informacion/protocol.php?menu=46">3.6 Responsabilidades de los Jefes de Sector y Supervisores(as). </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/care.png">
                            </div>
                        </div> 

                        <div class="card">
                        <a href="./Informacion/protocol.php?menu=47">3.7 Guía de observación para identificar indicadores de riesgo y detección en casos de maltrato infantil. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/prevencion.png">
                            </div>
                        </div>

                        <div class="card">
                        <a href="./Informacion/protocol.php?menu=48">3.8 Protocolo en situaciones de maltrato infantil. </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/seguro.png">
                            </div>
                        </div>

                        <div class="card">
                        <a href="./Informacion/protocol.php?menu=49">3.9 Diagrama de Flujo del Protocolo de Maltrato Infantil (Infografía). </a>
                            <div class="container-img"><img class="imagen-card" src="../../rs-plugin/images/flujo-de-trabajo.png">
                            </div>
                        </div>

                    </div>
                    </ul>
                </div>
            </section>
            
            <!--Footer -->
            <footer id="footer">
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                        <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2023. Apoyo educativo.                            <br />
                            <br />
                             <a href="https://educacion.durango.gob.mx/">© 2023 | Secretaría de Educación del Estado de Durango |</a> 
                            <a href="https://www.lerdo.tecnm.mx/">Tecnológico Nacional de México campus Lerdo</a>
                            <a href="/Tabs/creditos.php"> | Creditos Equipo de Trabajo</a>
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