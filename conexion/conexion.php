<?php 
$dsn = "mysql:host=localhost:8080;dbname=id20668019_dbeducalaguna;charset=utf8mb4";
$usuario = 'root';
$contrasena = '';
$conexion;
try {
  $conexion = new PDO($dsn, $usuario, $contrasena);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>