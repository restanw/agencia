<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700");

    .login {
        width: 100%;
        height: 100%;
        background: #ae0004;
        background: #666 url("https://cloudfront-us-east-1.images.arcpublishing.com/semana/735ZLE4ZPBAVZG4MT5SE3F7UMU.jpg") no-repeat;
        /* background: #666 url("https://images.unsplash.com/photo-1483279745275-2a5d5a1074d2?ixlib=rb-0.3.5&s=86f82abe8d1c04d1cbda7b949d740b26&dpr=1") no-repeat; 
  
  */
        background-position: center center;
        background-size: cover;
        padding: 5% 5%;
    }

    .login * {
        font-family: 'Open Sans';
        transition: 200ms all ease-in-out;
    }

    .login-contenedor {
        z-index: 999;
        width: 300px;
        height: 480px;
        position: relative;
        margin: auto;
        border-radius: 20px;
        box-shadow: 16px 16px 56px rgba(0, 0, 0, 0.3);
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        overflow: hidden;
    }

    .login-encabezado {
        width: 100%;
        height: 50px;
        border-radius: 20px 20px 0 0;
        display: flex;
    }

    .login-encabezado a {
        display: block;
        width: 50%;
        float: left;
        text-align: center;
        font-family: 'Open Sans';
        font-weight: normal;
        font-size: 1em;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-decoration: none;
        padding: 16px 0px 0px;
        height: 50px;
    }

    .login-encabezado a:hover {
        opacity: 1;
        color: #fff;
        background: #ae0004;
    }

    a.acceder,
    a.registrarse {
        background: #fff;
        color: #222;
    }

    a.acceder {
        padding-top: 28px;
    }

    a.acceder.modo-activo {
        padding-top: 22px;
        font-size: 1.3rem;
    }

    a.registrarse.modo-activo {
        font-size: 1.3rem;
    }

    a.acceder.modo-activo,
    a.registrarse.modo-activo {
        background: transparent;
        color: #fff;
        width: 70%;
        height: 70px;
    }

    .login hr {
        width: 75%;
        margin-top: 5px;
        opacity: .4;
    }

    .login .login-contenido {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .login .formulario,
    .login .login-footer {
        display: flex;
        flex-direction: column;
    }

    .login .login-footer {
        align-items: center;
    }

    .login .formulario input[type="text"],
    .formulario input[type="password"] {
        border-radius: 21px;
        padding: 15px;
        margin-top: 35px;
        padding-left: 50px;
        height: 20px;
        border: 1px solid #d7d7d7;
        color: #fff;
    }

    .login .formulario input[type="text"]:focus {
        outline: none;
        box-shadow: 0px 2px 21px 2px rgba(255, 255, 255, 0.8);
        background: #000 url("https://secure.canon.com.au/Content/images/account.svg") no-repeat left;
        padding: 24px 15px 15px 50px;
    }

    .login .formulario input[type="password"]:focus {
        outline: none;
        box-shadow: 0px 2px 21px 2px rgba(255, 255, 255, 0.8);
        background: #000 url("https://secure.canon.com.au/Content/images/password.svg") no-repeat left;
    }

    .login .formulario input[type="text"] {
        background: url("https://secure.canon.com.au/Content/images/account.svg") no-repeat left;
    }

    .login .formulario input[type="password"] {
        background: url("https://secure.canon.com.au/Content/images/password.svg") no-repeat left;
        margin-top: 25px;
    }

    .login .confirmar {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 19px 15px 30px;
    }

    .login .confirmar * {
        cursor: pointer;
    }

    .login label {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #fff;
        font-size: .8em;
        padding-left: 10px;
        font-weight: 300;
    }

    .login .login-boton {
        margin-bottom: 40px;
    }

    .login .enviar {
        background-color: #ae0004;
        border: none;
        padding: 12px 60px;
        border-radius: 40px;
        color: white;
    }

    .login .enviar:hover,
    .login .enviar:focus {
        background-color: #000;
        outline: none;
    }

    .login .enviar:focus {
        box-shadow: inset 2px 2px 2px rgba(0, 0, 0, 0.4);
    }

    .login .clave-olvidada {
        color: #fff;
        text-decoration: none;
        font-size: .8em;
        font-weight: 300;
        padding-top: 15px;
    }

    .login .clave-olvidada:hover {
        font-size: 0.9em;
        color: #fff;
    }

    #logearse.animated,
    #registrarse.animated {
        -vendor-animation-delay: 200ms;
        -vendor-animation-iteration-count: infinite;
    }

    .login .modo-mostrar {
        display: block;
    }

    .login .esconder {
        display: none;
    }

    .login .modo-activo {
        opacity: 1 !important;
        /* border-bottom: 1px solid #ae0004; */
        transition-delay: 200ms all ease-in-out;
    }


    /* para float label */

    .login form {
        max-width: 25em;
        width: 95%;
    }

    .login form ul {
        padding: 0;
    }

    .login form li {
        list-style: none;
        position: relative;
    }

    .login span {
        position: absolute;
        /* color: #ae0004; */
        color: #f80006;
        opacity: 1;
        top: 40px;
        left: 50px;
        font-size: 0.7rem;
        -webkit-transition: .333s ease top, .333s ease opacity;
        transition: .333s ease top, .333s ease opacity;
    }

    .js-hide-label span {
        opacity: 0;
        top: 1.5em;
    }
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

    <div class="login">
        <div class="login-contenedor">
            <div class="login-encabezado clearfix">
                <a class="acceder modo-activo" href="#">Ingresar</a>
                <a class="registrarse" href="#">Crear <br />tu Cuenta</a>
            </div>
            <!-- logearse -->
            <div class="modo-mostrar" id="logearse">
                <div class="login-contenido">
                    <div class="formulario">
                        <form>
                            <ul>
                                <li><span for="name">E-mail:</span><input type="text" placeholder="E-mail" /></li>
                            </ul>
                        </form>
                        <input type="password" placeholder="Contraseña" />
                    </div>
                    <div class="formulario confirmar">
                        <input type="checkbox" id="logeado" />
                        <label for="logeado">Mantener la sesión activa</label>
                    </div>
                    <div class="formulario login-boton">
                        <button class="enviar" type="submit">Iniciar sesión</button>
                    </div>
                </div>
                
            </div>

            <!-- registrarse -->
            <div class="esconder" id="registrarse">

                <div class="login-contenido">
                    <div class="formulario">
                        <form>
                            <ul>
                                <li><span for="name">Nombre</span><input type="text" placeholder="Nombre" required/></li>
                                <li><span for="name">Apellido</span><input type="text" placeholder="Apellodo" required/></li>
                                <li><span for="name">User</span><input type="text" placeholder="Usuario"required/></li>
                                <li><span for="name">contraseña</span><input type="text" placeholder="Contraseña" required /></li>
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
<script>
    var signIn = $('.acceder'),
        signUp = $('.registrarse'),
        card1 = $('#logearse'),
        card2 = $('#registrarse'),
        submit = $('.enviar');

    function ifActive(elem) {
        if (elem.hasClass('modo-activo')) {
            return true;
        } else {
            return false;
        }
    }

    function switchCards() {
        signUp.on('click', function(e) {
            e.preventDefault();
            if (ifActive(signIn)) {
                signUp.addClass('modo-activo');
                signIn.removeClass('modo-activo');
                card1.removeClass('modo-mostrar').addClass('esconder');
                card2.removeClass('esconder').addClass('modo-mostrar animated bounceInRight');
            }
        });
        signIn.on('click', function(e) {
            e.preventDefault();
            if (ifActive(signUp)) {
                signUp.removeClass('modo-activo');
                signIn.addClass('modo-activo');
                card2.removeClass('modo-mostrar').addClass('esconder');
                card1.removeClass('esconder').addClass('modo-mostrar animated bounceInLeft');
            }
        });

    }

    switchCards();

    // float labels
    // https://codepen.io/jobennett/pen/Wvdrba

    $('form li').each(function() {
        $(this).addClass('js-hide-label');
    });

    $('form li').find('input').on('keyup', function(e) {
        var $this = $(this),
            $parent = $this.parent();

        if (e.type == 'keyup') {
            //this if statement is needed if a user hits delete within the input. Otherwise, the label will appear along w placeholder
            if ($this.val() == '') {
                $parent.addClass('js-hide-label');
                //add the class if keyup and the input isn't empty
            } else {
                $parent.removeClass('js-hide-label');
            }
        }
    });
</script>

</html>