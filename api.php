<?php
// Definir la respuesta de la API
$response = array(
    'status' => 'success',
    'message' => '¡API funcionando correctamente!',
    'data' => null
);

// Obtener los parámetros de la solicitud
$parametro1 = $_GET['parametro1']; // Ejemplo de parámetro en la URL

// Realizar alguna lógica o procesamiento con los parámetros recibidos
// Aquí puedes realizar operaciones adicionales o acceder a una base de datos, por ejemplo

// Agregar los datos procesados a la respuesta de la API
$response['data'] = array(
    'parametro1' => $parametro1
);

// Establecer la cabecera de respuesta como JSON
header('Content-Type: application/json');

// Enviar la respuesta de la API en formato JSON
echo json_encode($response);
?>
