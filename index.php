<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Tecnológico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-light">
    <!-- Cabecera -->
    <header class="bg-dark text-light py-3 fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <img src="img/logo.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
            </div>
            <div>
                <h1 class="text-center m-0">Conferencias de Tecnología</h1>
            </div>
            <div>
                <button type="button" class="btn btn-outline-light">Buscar</button>
            </div>
        </div>
    </header>

    <section class="container mt-5 pt-5">
        <div class="row align-items-center">
            <div class="col">
                <img src="img/logo_1.png" alt="Logo_principal" class="img-fluid w-50">
            </div>
            <div class="col text-center">
                <a href="registroEvento.php">
                    <button type="button" class="btn btn-primary btn-lg">REGÍSTRESE AHORA</button>
                </a>
                <h5 class="mt-3">DEL 10 AL 20 DE MAYO DE 2024</h5>
                <h5>LOJA, UTPL</h5>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-dark bg-dark mt-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BIENVENIDOS A CONFERENCIAS UTPL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            .image-container {
                position: relative;
                margin: 10px;
                margin-right: 30px;
            }

            .image-container img {
                width: 100%;
                height: auto;
                transition: transform .2s;
            }

            .image-container img:hover {
                transform: scale(1.1);
            }

            .image-container .bottom-text {
                position: absolute;
                bottom: 8px;
                left: 16px;
                color: white;
                font-size: 18px;
                background-color: rgba(0, 0, 0, 0.6);
                /* Fondo negro con opacidad */
                padding: 10px;
            }
        </style>
    </head>

    <div class="container d-flex justify-content-center align-items-center mt-4">
        <div class="image-container">
            <a href="registroEvento.php">
                <img src="img/Evento_001.webp" alt="Evento 01" class="img-fluid">
                <div class="bottom-text">ROBOTICA</div>
            </a>
        </div>
        <div class="image-container">
            <a href="registroEvento.php">
                <img src="img/Evento_002.webp" alt="Evento 02" class="img-fluid">
                <div class="bottom-text">INTELIGENCIA ARTIFICIAL (IA)</div>
            </a>
        </div>
        <div class="image-container">
            <a href="registroEvento.php">
                <img src="img/Evento_003.webp" alt="Evento 03" class="img-fluid">
                <div class="bottom-text">PROGRAMACION</div>
            </a>
        </div>
    </div>

</html>

<!-- Footer -->
<footer class="text-center text-bg-dark mt-auto py-3 fixed-bottom">
    <small>© 2024. <b>Evento Tecnológico UTPL</b> - Todos los derechos reservados.</small>
</footer>
<!-- JavaScrip -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>