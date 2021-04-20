<header class="">
        <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-home navbar-inverse navbar-fixed-top  ">
            <div class="container">
                <a class="navbar-brand" href=".">Intralink</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><i class="bi bi-list" style="font-size:20px;color:#fff"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="planes.php">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto" style="vertical-align: middle;">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Inicia sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Regístrese</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>