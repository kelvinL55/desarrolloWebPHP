<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Crud PHP & MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('fecha_registro');

            dateInput.addEventListener('change', function() {
                const date = new Date(this.value);
                const formattedDate = `${date.getDate().toString().padStart(2, '0')}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getFullYear()}`;
                console.log(formattedDate);
                alert(`Fecha seleccionada: ${formattedDate}`);
            });
        });
    </script>
</head>

<body>
    <script>
        function eliminar() {
            var respuesta = confirm("Estas Seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <div>
        <h1 class="text-center p-1">Registro de Usuarios </h1>
    </div>
    <div class="container-fluid">

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
                        <label for="correo" class="form-label text-white">E-mail</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su e-mail">
                    </div>

                    <div class="form-group mb-3">
                        <label for="telefono" class="form-label text-white">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su Teléfono">
                    </div>

                    <div class="form-group mb-3">
                        <label for="rol" class="form-label text-white">Rol</label>
                        <input type="text" class="form-control" id="rol" name="rol" placeholder="Ingrese su rol">
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
                            <th scope="col">Rol</th>
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
                                <td><?= $datos->rol ?></td>
                                <td><?= $datos->fecha_registro ?></td>
                                <td>
                                    <a href="modificar.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </a>
                                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <!-- Pie de página -->
    <footer class="text-center text-bg-dark mb-1">

        <small>&copy; 2024. <b>Crud PHP & MySql</b> - Todos los derechos reservados.</small>

    </footer>

    <!-- JavaScrip -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>