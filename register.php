<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <?php
    require('pages/custom/header.php');
    ?>
    <div class="container ptb">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-12 col-md-4"></div>
            <div class="col-sm-12 col-md-4 shadow p-4 rounded">
                <form action="/php/red_social/registro.php" method="post">

                    <div class="col mb-3">
                        <h2>Registrarse</h2>
                    </div>

                    <div class="col mb-2">
                        <input type="text" class="form-control" name="nombres" id="" placeholder="Nombres y apellidos">
                    </div>
                    <div class="col mb-2">
                        <input type="text" class="form-control" name="usuario" id="" placeholder="Usuario">
                    </div>
                    <div class="col mb-2">
                        <input type="text" class="form-control" name="correo" id="" placeholder="Correo electrónico">
                    </div>
                    <div class="col mb-2">
                        <input type="password" class="form-control" name="contra" id="" placeholder="Contraseña">
                    </div>
                    <div class="col mb-2 d-grid ">
                        <input type="submit" class="btn btn-dark" name="registrar" value="Registrar">
                    </div>
                </form>
                                <div class="registrar">
                    <a href="login.php">Iniciar sesión</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4"></div>
        </div>
    </div>
    <?php
    require('pages/custom/footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>