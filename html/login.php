<?php include 'header.php'; ?>


    <div class="photo-gallery-intro">
        <h2>Galería de Fotos</h2>
        <p>Explora nuestra colección de impresionantes fotografías de aviones.</p>
    </div>

    <div class="photo-gallery">
        <h3>Aviones en Exhibición</h3>





    </div>

 <div class="contenedor">
    <h3>Si quieres contribuir con tu material, regístrate con nosotros. Si ya eres usuario ¡Bienvenido de nuevo! </h3>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="campoFormulario">
                <label for="loginUsername">Usuario:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
            </div>
            <div class="campoFormulario">
                <label for="loginPassword">Contraseña:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
            </div>
            <button type="submit" class="boton">Iniciar Sesión</button>
        </form>

        <div class="separador"></div>


        <h2>Registro</h2>
        <form action="register.php" method="post">
            <div class="campoFormulario">
                <label for="registerUsername">Nombre de Usuario:</label>
                <input type="text" id="registerUsername" name="registerUsername" required>
            </div>
            <div class="campoFormulario">
                <label for="registerEmail">Correo Electrónico:</label>
                <input type="email" id="registerEmail" name="registerEmail" required>
            </div>
            <div class="campoFormulario">
                <label for="registerPassword">Contraseña:</label>
                <input type="password" id="registerPassword" name="registerPassword" required>
            </div>
            <button type="submit" class="boton">Registrarse</button>
        </form>
    </div>

<?php include 'footer.php'; ?>