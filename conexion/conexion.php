<?php 
$dsn = "mysql:host=localhost;dbname=id20668019_dbeducalaguna;charset=utf8mb4";
$usuario = 'root';
$contrasena = '1502';
$conexion;
try {
  $conexion = new PDO($dsn, $usuario, $contrasena);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>