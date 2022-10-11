<style>

</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
</head>

<body>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel="stylesheet" type="text/css" href="http://localhost/agencia/asset/css/style_login.css">

    <div class="login">
        <div class="login-contenedor">
            <div class="login-encabezado clearfix">
                <a class="acceder modo-activo" href="#">Ingresar</a>
                <a class="registrarse" href="#">Crear <br />tu Cuenta</a>
            </div>
            <!-- logearse -->
            <div class="modo-mostrar" id="logearse">
                <div class="login-contenido">
                    <form method="POST" action="<?= base_url() ?>Landing/validaAcceso">
                        <div class="formulario">
                            <ul>
                                <li><input type="text" placeholder="usuario" name="user" /></li>
                            </ul>
                            <input type="password" placeholder="Contraseña" name="contrasena" />
                        </div>
                        <div class="formulario login-boton">
                            <button class="enviar" type="submit">Iniciar sesión</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- registrarse -->
            <div class="esconder" id="registrarse">

                <div class="login-contenido">
                    <div class="formulario">
                        <form method="POST" action="<?= base_url() ?>Landing/registrar">

                            <ul>
                                <li><input type="text" placeholder="Nombre" name="nombre" required /></li>
                                <li><input type="text" placeholder="Usuario" name="user" required /></li>
                                <li><input type="password" placeholder="contraseña" name="contrasena" required /></li>
                                <li><input type="text" placeholder="telefono" name="telefono" required /></li>
                            </ul>

                            <button class="enviar" type="submit">Crear cuenta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>




</body>
<script src="http://localhost/agencia/asset/js/footer_login.js"></script>

</html>