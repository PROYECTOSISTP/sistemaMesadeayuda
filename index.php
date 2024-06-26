<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

    <link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="img/favicon.png" rel="icon" type="image/png">
    <link href="img/favicon.ico" rel="shortcut icon">


    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>

<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            <form class="sign-box" action="clogin.php" method="POST">
                <div class="sign-avatar">
                    <img src="public/img/avatar-sign.png" alt="">
                </div>
                <header class="sign-title">Iniciar Sesión</header>
                <div class="form-group">
                    <label for="namepe"> Usuario</label>
                    <input type="text" name="namepe" class="form-control" placeholder="Correo"/>
                </div>

                <div class="form-group">
                    <label for="contra"> Contraseña</label>
                    <input type="password" name="contra" class="form-control" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <div class="float-right reset">
                        <a href="reset-password.html">Cambiar Contraseña</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-rounded">Ingresar</button>
            </form>
        </div>
    </div>
</div><!--.page-center-->


<script src="public/js/lib/jquery/jquery.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
<script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
    $(function() {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            },100);
        });
    });
</script>
<script src="js/app.js"></script>
</body>
</html>
