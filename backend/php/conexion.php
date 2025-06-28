<?php
// Archivo de ejemplo para conexión a MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "venta_celulares";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
$conn->close();
?>
