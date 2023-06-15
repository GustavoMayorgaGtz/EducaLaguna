<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>CRÉDITOS</title>
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
    <link rel="stylesheet" href="./creditosStyles.css">
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
        $nav->setTitle('CRÉDITOS');
        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = false;
        }
        $nav->setHaveLogin(!$_SESSION['login']);
        $nav->setHaveLogout($_SESSION['login']);
        $nav->setHaveDropdown($_SESSION['login']);
        $nav->render();
        ?>
        <section class="container-primary">
           <p class="category-style">Subcretaría de Educación</p>
           <p class="name-style">Lic. Erick Emmanuel Ortega Pérez</p>
           <div class="space"></div>
           <p class="category-style">CIIDE Unidad Profr. José Santos Valdés </p>
           <p class="name-style">Dr. Gerardo de Jesús Garza Rosales</p>
           <div class="space"></div>
           <p class="category-style">Tecnológico Nacional de México / Instituto Tecnológico Superior de Lerdo</p>
           <i>Desarrollo web</i>
           <p class="name-style">Dra. Elda Moreno Núñez</p>
           <p class="name-style">Dra. Karla Verónica Rodríguez Lozano</p>
           <p class="name-style">Dra. María Guadalupe Flores Luévanos</p>
           <p class="name-style">Gustavo Mayorga Gutiérrez</p>
           <p class="name-style">Ángel de Jesús Alarcón García</p>
           <p class="name-style">Julián Ramos Ocón</p>
           <p class="name-style">Alfredo Manuel Zamora Silerio</p>
           <div class="space"></div>
           <div class="container-responsive">
            <div class="left">
            <p class="category-style">Centro de Tecnología Educativa </p>
           <i>Gestión de dominio y hosting</i>
            <p class="name-style"> Ing. Armando Narvaez Plascencia </p>    
            <p class="name-style">Lic. Gerardo de J. Garza Castañeda </p>
            </div>
            <div class="right">
            <p class="category-style">Coordinación de Primaria Federal </p>
           <i>Narración en videos</i>
           <p class="name-style">Mtra. Marlene Marentes Pereira</p>
            </div>
           </div>
           
   
           <div class="space"></div>
        </section>
     
        <!--Footer -->
        <footer id="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2021 <a href="http://deciide.com.mx">deciide.com.mx</a>. Apoyo educativo. -->
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