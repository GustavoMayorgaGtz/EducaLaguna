<?php 
$dsn = "mysql:host=127.0.0.1;dbname=pruebamediadur;charset=utf8mb4";
$usuario = 'root';
$contrasena = '';
$conexion;
try {
  $conexion = new PDO($dsn, $usuario, $contrasena);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>