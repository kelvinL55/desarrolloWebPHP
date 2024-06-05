<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7893341b6a.js" crossorigin="anonymous"></script>
    <!-- Defino la fecha del sistema -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fechaInput = document.getElementById('fecha_registro');
            const hoy = new Date();
            const dia = String(hoy.getDate()).padStart(2, '0');
            const mes = String(hoy.getMonth() + 1).padStart(2, '0'); // Los meses empiezan en 0
            const año = hoy.getFullYear();
            const fechaActual = `${año}-${mes}-${dia}`;
            fechaInput.value = fechaActual;
        });
    </script>
</head>

<body class="bg-light">
    <script>
        function eliminar() {
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
                <h1 class="text-center m-0">Registro de Usuarios</h1>
            </div>
            <div>
                <a href="index.php">
                    <button type="button" class="btn btn-outline-light">Inicio</button>
                </a>
                <a href="registroEvento.php">
                    <button type="button" class="btn btn-outline-light">Registar Evento</button>
                </a>
            </div>
        </div>
    </header>

    <div class="container-fluid mt-5 pt-5">

        <div class="row">
            <!-- Formulario -->
            <div class="col-md-3 bg-dark p-1 border rounded shadow m-3">
                <?php
                include "controlador/eliminar.php";
                include "conexion.php";
                ?>
                <form class="p-2" method="POST">
                    <h4 class="text-center   text-light"> Formulario </h4>
                    <?php include "create.php"; ?>

                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label text-white">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
                    </div>

                    <div class="form-group mb-3">
                        <label for="cedula" class="form-label text-white">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su cédula">
                    </div>

                    <div class="form-group mb-3">
                        <label for="correo" class="form-label text-white">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo">
                    </div>

                    <div class="form-group mb-3">
                        <label for="telefono" class="form-label text-white">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su Teléfono">
                    </div>

                    <div class="form-group mb-3">
                        <label for="fecha_registro" class="form-label text-white">Fecha de Registro</label>
                        <input type="date" class="form-control" id="fecha_registro" name="fecha_registro">
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Fecha de Ingreso</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conexion.php";
                        $sql = $conexion->query("SELECT * FROM usuarios");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->cedula ?></td>
                                <td><?= $datos->correo ?></td>
                                <td><?= $datos->telefono ?></td>
                                <td><?= $datos->fecha_registro ?></td>
                                <td>
                                    <a href="modificar.php?id=<?= $datos->id ?>" class="btn btn-small btn-info"> <i class="fa-solid fa-user-pen"></i></a>
                                    <a onclick="return eliminar()" href="registroUsuarios.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"> <i class="fa-solid fa-trash"></i></a>
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