<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'user_johan');
define('DB_PASSWORD', '');
define('DB_NAME', 'vuelo5');

// Crear conexión
$conexion = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
