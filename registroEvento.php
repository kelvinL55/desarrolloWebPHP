<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7893341b6a.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <script>
        function eliminarEvento() {
            var respuesta = confirm("¿Estás seguro de que quieres eliminar este registro?");
            return respuesta
        }
    </script>
    <!-- Cabecera -->
    <header class="bg-dark text-light py-1 fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <img src="img/logo.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
            </div>
            <div>
                <h1 class="text-center m-0">Registro de eventos Tecnológicos UTPL</h1>
            </div>
            <div>
                <a href="index.php">
                    <button type="button" class="btn btn-outline-light">Inicio</button>
                </a>
                <a href="registroUsuarios.php">
                    <button type="button" class="btn btn-outline-light">Regitar Usuario</button>
                </a>
                <button type="button" class="btn btn-outline-light">Acerca de </button>
                </a>
            </div>
        </div>
    </header>

    <div class="container-fluid mt-5 pt-5">

        <div class=" row">
            <!-- Formulario -->
            <div class="col-md-3 bg-dark p-1 border rounded shadow m-3">
                <?php
                include "controlador/eliminarEvento.php";
                include "conexionEvento.php";
                ?>
                <form class="p-2" method="POST">
                    <h4 class="text-center   text-light"> Formulario del Evento</h4>
                    <?php include "createEvento.php"; ?>

                    <div class="form-group mb-3">
                        <label for="nombreEvento" class="form-label text-white">Nombre del Evento</label>
                        <select class="form-control" id="nombreEvento" name="nombreEvento">
                            <option value="" disabled selected>Ingrese el Evento</option>
                            <option value="Robotica">Robótica</option>
                            <option value="IA">Inteligencia Artificial (IA)</option>
                            <option value="Programacion">Programación</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="usuario" class="form-label text-white">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tipoDeEvento" class="form-label text-white">Tipo de Evento</label>
                        <select class="form-control" id="tipoDeEvento" name="tipoDeEvento">
                            <option value="" disabled selected>Tipo de Evento</option>
                            <option value="Conferencia">Conferencia</option>
                            <option value="Taller">Taller</option>
                            <option value="Webinar">Webinar</option>
                        </select>
                    </div>


                    <div class="form-group mb-3">
                        <label for="servicios_Disponibles" class="form-label text-white">Servicios Disponibles</label>
                        <select class="form-control" id="servicios_Disponibles" name="servicios_Disponibles">
                            <option value="" disabled selected>Servicios Disponibles</option>
                            <option value="Desarrollo de Software">Desarrollo de Software</option>
                            <option value="Consultoría de IA">Consultoría de IA</option>
                            <option value="Talleres de Robótica">Talleres de Robótica</option>
                        </select>
                    </div>


                    <div class="form-group mb-3">
                        <label for="fecha_registro_evento" class="form-label text-white">Fecha de Registro del Evento</label>
                        <input type="date" class="form-control" id="fecha_registro_evento" name="fecha_registro_evento">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
                    </div>

                </form>
            </div>

            <!-- Tabla -->
            <div class="col-md-8 p-1 m-3">
                <table class="table table-light table-hover">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Evento</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Tipo de Evento</th>
                            <th scope="col">Servicios Disponibles</th>
                            <th scope="col">Fecha de Registro del Evento</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conexionEvento.php";
                        $sql = $conexionEvento->query("SELECT * FROM evento");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td><?= $datos->nombreEvento ?></td>
                                <td><?= $datos->usuario ?></td>
                                <td><?= $datos->tipoDeEvento ?></td>
                                <td><?= $datos->servicios_Disponibles ?></td>
                                <td><?= $datos->fecha_registro_evento ?></td>
                                <td>
                                    <a href="modificarEvento.php?id=<?= $datos->id ?>" class="btn btn-small btn-info"> <i class="fa-solid fa-user-pen"></i></a>
                                    <a onclick="return eliminarEvento()" href="registroEvento.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"> <i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Footer -->
    <footer class="text-center text-bg-dark mt-auto py-3 fixed-bottom">
        <small>&copy; 2024. <b>Evento Tecnológico UTPL</b> - Todos los derechos reservados.</small>
    </footer>
    <!-- JavaScrip -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>