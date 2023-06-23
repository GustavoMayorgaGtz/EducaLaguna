<?php
require_once('../../../conexion/conexion.php');
// Obtener el cuerpo de la solicitud
$body = file_get_contents("php://input");
// Decodificar el cuerpo JSON en un arreglo asociativo
$data = json_decode($body, true);

//Datos de entrada
$userType = $data['userType'];
$grade = $data['grade'];
$type = $data['type'];

$insert = "INSERT INTO tblogin (usertype, grade, type) values ('{$userType}','{$grade}','{$type}')";
$result = $conexion->query($insert);
// Respuesta
$response = [
  'message' => $userType,
  'grade' => $grade,
  'type' => $type
];
$jsonResponse = json_encode($response);
header('Content-Type: application/json');
echo $jsonResponse;
?>