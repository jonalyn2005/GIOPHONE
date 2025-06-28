<?php
// Configuración de la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'venta_celulares';
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
?>
