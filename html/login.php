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

<section id="wrapper" class="login-register login-sidebar" style="background-image:url(../images/background/fotoevento.jpg);">
    <div class="login-box card">
        <div class="card-body">

            <form class="form-horizontal form-material" autocomplete="off" id="loginform" action="../controladores/loginController.php" method="post">

<!--                <a href="javascript:void(0)" class="text-center db">-->
<!--                    <img src="./images/logo-icon.png" alt="Home"/><br/><img src="./images/logo-text.png" alt="Home"/>-->
<!--                </a>-->
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input id="email" name="email" class="form-control" type="email" required="" placeholder="Email"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">

                        <input id="password" name="password" class="form-control" type="password" placeholder="Contraseña"/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">

                            <input id="checkbox-signup"
                                   type="checkbox"
                                   class="filled-in chk-col-light-blue"
                            >
                            <label for="checkbox-signup"> Recuérdame </label>

                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                    class="fa fa-lock m-r-5"></i> </a></div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Entrar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <!--            <div #googleBtn id="buttonDiv"></div>-->
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        ¿No tienes cuenta? <a href="registro.php" class="text-primary m-l-5"><b>Regístrate</b></a>
                    </div>
                </div>
            </form>

            <form class="form-horizontal" id="recoverform" action="../index.php">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Ingrese su correo electrónico y se le enviarán las instrucciones! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


</body>
</html>

