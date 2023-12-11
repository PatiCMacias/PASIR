<?php
$servername = "127.0.0.1"; // Asume que el servidor de la base de datos está en la misma máquina
$username = "pat"; // El usuario de la base de datos
$password = "pat_pasir"; // La contraseña del usuario de la base de datos
$dbname = "Spotters"; // El nombre de tu base de datos
$port = 3308;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Chequear la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


