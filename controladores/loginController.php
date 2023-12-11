<?php

require_once('../Database/db_connect.php');

session_start();

// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Asumiendo que los nombres de los campos son 'email' y 'password'
    $email = $_POST['email'];
    $password = $_POST['password'];  // En un caso real, considera encriptar la contraseña

    $sql = "SELECT * FROM Spotters.USUARIOS WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);  // Usando $conn de tu script de conexión
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Usuario encontrado, puede iniciar sesión
        $_SESSION['usuario_id'] = $email;  // Almacenar el email en la sesión
        header("Location: /PASIR");
        exit();
    } else {
        // Usuario no encontrado o contraseña incorrecta
        echo "Credenciales incorrectas.";
    }

    $stmt->close();
}
$conn->close();
