<?php
session_start(); // Inicia la sesión

// Comprobar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    // Si no hay usuario logueado, redirigir a login.php
    header("Location: /PASIR/html/login.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>ESP.Potters</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/css_index.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/css_galeria.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/css_aeropuertos.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">

</head>
<body>
<header>
    <h1>ESP.Potters</h1>
    <nav>
        <ul>
            <li><a href="/PASIR/index.php">Home</a></li>
            <li><a href="/PASIR/html/aeropuertos.php">Aeropuertos</a></li>
            <li><a href="/PASIR/html/galeria.php">Galería</a></li>
            <li><a href="/PASIR/html/logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
</header>
