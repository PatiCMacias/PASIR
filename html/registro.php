<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>ESP.POTTERS</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">


</head>
<body>

<section id="wrapper" class="login-register login-sidebar" style="background-image:url(../images/background/A310_LETO.jpg);">
    <div class="login-box card">
        <div class="card-body">

            <form class="form-horizontal form-material" id="loginform" autocomplete="off">

                    <a href="javascript:void(0)" class="text-center db">
    <!--                    
                        <br/>
    <!--                    <img src="./assets/images/logo-text.png" alt="Home" />-->
                    </a>
                    <h3 class="box-title m-t-40 m-b-0">Regístrese Ahora</h3><small>Crea tu cuenta y diviértete</small>
                    <div class="form-group m-t-20">
                        <div class="col-xs-12">
                            <input id="userName" class="form-control" type="text" placeholder="Nombre de Usuario">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="email" class="form-control" type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="password" class="form-control" type="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password2" class="form-control" type="password" placeholder="Confirmar contraseña">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Acepto los  <a href="#">Terminos y condiciones</a></label>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col text-danger" id="errores">
                        <!-- Aquí se mostrarán los mensajes de error -->
                    </div>
                </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" onclick="validarFormulario()">Registrar</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>¿Ya tienes cuenta? <a href="login.php" class="text-info m-l-5"><b>Pulse aqui</b></a></p>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>

<script>
    function validarFormulario() {
        const errores = document.getElementById("errores");
        errores.innerHTML = ''; // Limpiar mensajes anteriores

        const userName = document.getElementById("userName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const password2 = document.getElementById("password2").value;
        const terminos = document.getElementById("checkbox-signup").checked;
        let hayErrores = false;

        if(userName === "") {
            errores.innerHTML += '<p>* El nombre de usuario es obligatorio</p>';
            hayErrores = true;
        }

        if(email === "") {
            errores.innerHTML += '<p>* El email es obligatorio</p>';
            hayErrores = true;
        }

        if(password === "") {
            errores.innerHTML += '<p>* La contraseña es obligatoria</p>';
            hayErrores = true;
        }

        if(password !== password2) {
            errores.innerHTML += '<p>* Las contraseñas deben ser iguales</p>';
            hayErrores = true;
        }

        if(!terminos) {
            errores.innerHTML += '<p>* Debe aceptar los términos y condiciones</p>';
            hayErrores = true;
        }

        if(hayErrores) {
            event.preventDefault();
        }
    }
</script>

</body>
</html>

