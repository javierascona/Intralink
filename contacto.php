<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
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
    <section class="bg-dark ptb-md">
        <div class="container   text-center">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="text-light">Contáctenos</h2>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur elit. Quas eaque ipsam laudantium.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ptb">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-12 col-md-4 pr-3">
                    <div class="desprin mb-3">
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit kilo gyt.</p>
                        <hr class=" border-b">
                        </hr>
                    </div>
                    <div class="contacto-p">
                        <h5>Número telefónico:</h5>
                        <p>+51 987 654 321</p>
                    </div>
                    <div class="contacto-e">
                        <h5>Correo electrónico:</h5>
                        <p>soporte@intralink.com</p>
                    </div>
                    <div class="contacto-d">
                        <h5>Nuestra dirección:</h5>
                        <p>Av loreto 678 - Castilla - Piura - Perú</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 shadow p-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 mb-3">
                            <label for="" class="mb-2">Nombre y apellidos completos</label>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col-sm-12 col-md-12 mb-3">
                            <label for="" class="mb-2">Correo electrónico</label>
                            <input type="text" class="form-control" aria-label="Last name">
                        </div>
                        <div class="col-sm-12 col-md-12 mb-3">
                            <label for="" class="mb-2">Número telefónico</label>
                            <input type="text" class="form-control" aria-label="Last name">
                        </div>
                        <div class="col-sm-12 col-md-12 mb-3">
                            <label for="" class="mb-2">Dirección</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--Seleccionar--</option>
                                <option value="1">Piura</option>
                                <option value="2">Paita</option>
                                <option value="3">Sechura</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-3">
                            <label for="" class="mb-2">Planes</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--Seleccionar--</option>
                                <option value="1">Básico</option>
                                <option value="2">Premium</option>
                                <option value="3">Enterprise</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-3">
                            <label for="" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 14px;">
                                    Acepto las políticas de privacidad y Uso de Datos
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Enviar solicitud</button>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>

    </section>

    <?php
    require('pages/custom/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>