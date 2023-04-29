<?php
//Importamos la conexion de bd
require_once('../../../conexion/conexion.php');
require_once '../../../components/nav.php';
session_start();
//recibimos por parametro en url la opcion que se desea ver
$opcion = $_GET['menu'];
//Arreglo que guarda el id del contenido respecto al protocolo
$consulta = "SELECT * FROM tbprotocolo AS protocolo INNER JOIN tbcontenido AS contenido  ON protocolo.IdProtocolo = {$opcion} and contenido.IdProtocolo = {$opcion};";
//Se realiza la consulta y se separan los elementos por #
$resultado = $conexion->query($consulta);
while ($fila = $resultado->fetch()) {

    $arreglo = explode("#", $fila['Descripcion']); //Obtenemos la descripcion y separamos
    $titulo = $fila['Titulo']; //Obtenemos el titulo
    $parrafosSize = count($arreglo); //contamos los parrafos del arreglo
    // print_r($arreglo); //print_r sirve para imprimir arreglos
    // echo $parrafosSize; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="shortcut icon" href="../../rs-plugin/images/logoicon.png">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='../../../css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/hover-dropdown-menu.css" rel="stylesheet">
    <link href="../../../css/icons.css" rel="stylesheet">
    <link href="../../../css/revolution-slider.css" rel="stylesheet">
    <link href="../../../rs-plugin/css/settings.css" rel="stylesheet">
    <link href="../../../css/animate.min.css" rel="stylesheet">
    <link href="../../../css/owl/owl.carousel.css" rel="stylesheet">
    <link href="../../../css/owl/owl.theme.css" rel="stylesheet">
    <link href="../../../css/owl/owl.transitions.css" rel="stylesheet">
    <link href="../../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/responsive.css" rel="stylesheet">
    <link href="../../../css/color.css" rel="stylesheet">
    <link href="../../../components/navstyle.css" rel="stylesheet">

    <!-- Estilos locales -->
    <link rel="stylesheet" href="./abusoinf.css">
</head>

<body>
    <?php
    $nav = new Nav();
    if (!isset($_SESSION['login'])) {
        $_SESSION['login'] = false;
        header("location:" . $nav->host . "/Tabs/SubMediaDUR/M_Principal.php");
    }
    $nav->setTitle('Abuso Sexual Infantil');
    $nav->setHaveLogout(true);
    $nav->setHaveDropdown(true);
    $nav->setHaveLogin(false);
    $nav->render();

    echo "<span class='title'>{$titulo}</span>";
    foreach ($arreglo as $valor) {
        echo "<span class='paragraph'>{$valor}</span>";
        echo "<br>";
    }
    ?>
      <!-- Scripts -->
        <script type="text/javascript" src="../../../js/jquery.min.js"></script>
        <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../js/hover-dropdown-menu.js"></script>
        <script type="text/javascript" src="../../../js/jquery.hover-dropdown-menu-addon.js"></script>	
        <script type="text/javascript" src="../../../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../../../js/jquery.sticky.js"></script>
        <script type="text/javascript" src="../../../js/bootstrapValidator.min.js"></script>	
        <script type="text/javascript" src="../../../rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
        <script type="text/javascript" src="../../../rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="../../../js/revolution-custom.js"></script>
        <script type="text/javascript" src="../../../js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="../../../js/jquery.appear.js"></script>
        <script type="text/javascript" src="../../../js/effect.js"></script>
        <script type="text/javascript" src="../../../js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="../../../js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="../../../js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="../../../js/jquery.countTo.js"></script>
        <script type="text/javascript" src="../../../js/tweet/carousel.js"></script>
        <script type="text/javascript" src="../../../js/tweet/scripts.js"></script>
        <script type="text/javascript" src="../../../js/tweet/tweetie.min.js"></script>
        <script type="text/javascript" src="../../../js/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="../../../js/custom.js"></script>
</body>

</html>