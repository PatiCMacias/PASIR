<?php
// db_connect.php
$servername = "127.0.0.1"; // Asume que el servidor de la base de datos está en la misma máquina
$username = "root"; // El usuario de la base de datos
$password = "my_root_password"; // La contraseña del usuario de la base de datos
$dbname = "Spotters"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequear la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

