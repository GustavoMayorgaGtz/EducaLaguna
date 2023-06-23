<?php
// Obtener el cuerpo de la solicitud
$body = file_get_contents("php://input");

// Decodificar el cuerpo JSON en un arreglo asociativo
$data = json_decode($body, true);

// Acceder a los datos recibidos
$userType = $data['userType'];
$grade = $data['grade'];
$type = $data['type'];

// Hacer algo con los datos recibidos
echo "userType: " . $userType . "<br>";
echo "grade: " . $grade . "<br>";
echo "type: " . $type . "<br>";
// Hacer algo con los datos recibidos
$response = [
    'message' => 'Solicitud recibida',
    'name' => $name,
    'age' => $age
  ];
  
  // Convertir la respuesta a formato JSON
  $jsonResponse = json_encode($response);
  
  // Enviar la respuesta al cliente
  header('Content-Type: application/json');
  echo $jsonResponse;
?>