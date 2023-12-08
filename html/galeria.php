<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>ESP.POTTERS</title>
    <link rel="stylesheet" type="text/css" href="../css/css_galeria.css">
</head>
<body>
<header>
    <h1>ESP.Potters</h1>
    <nav>
        <ul>
            <li><a href="../html/index.html">Home</a></li>
            <li><a href="../html/aeropuertos.html">Aeropuertos</a></li>
            <li><a href="galeria.php">Galería</a></li>
<!--            <li><a href="./contacto.html">Contacto</a></li>-->
        </ul>
    </nav>


    <div class="photo-gallery-intro">
        <h2>Galería de Fotos</h2>
        <p>Explora nuestra colección de impresionantes fotografías de aviones.</p>
    </div>

    <div class="photo-gallery">
        <h3>Aviones en Exhibición</h3>
        <?php
        include './db_connect.php'; // Asegúrate de que la ruta es correcta

        // SQL para obtener información de los aviones
        $sql = "SELECT modelo, tipo, alcance FROM aviones";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los datos de cada avión
            while($row = $result->fetch_assoc()) {
                echo "<div class='aircraft'>";
                echo "<h4>" . htmlspecialchars($row["modelo"]) . "</h4>";
                echo "<p>Tipo: " . htmlspecialchars($row["tipo"]) . "</p>";
                echo "<p>Alcance: " . htmlspecialchars($row["alcance"]) . " km</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No se encontraron aviones.</p>";
        }
        $conn->close();
        ?>
    </div>

    <!-- Continúa con el pie de página... -->

</header>

<div class="content">
    <!-- Contenido específico de cada página -->
</div>

<footer>
    <p>&copy; 2023 ESP.Potters</p>
</footer>
</body>
</html>