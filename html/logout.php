<?php
session_start();

// Liberar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario al login.php
header("Location: /PASIR/html/login.php");
exit();
?>
