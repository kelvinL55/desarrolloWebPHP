<?php
include "conexionEvento.php";
$id = $_GET["id"];
$sql = $conexionEvento->query("select *from evento where id =$id");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Modificar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-light">
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-info"> Actualizar Evento</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/modificar_Evento.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="bg-dark p-3 border rounded shadow">
                <div class="mb-1">
                    <label for="nombreEvento" class="form-label  text-light">Nombre del Evento</label>
                    <input type="text" class="form-control" name="nombreEvento" value="<?= $datos->nombreEvento ?>">
                </div>
                <div class="mb-1">
                    <label for="usuario" class="form-label text-light">usuario</label>
                    <input type="text" class="form-control" name="usuario" value="<?= $datos->usuario ?>">
                </div>
                <div class="mb-1">
                    <label for="tipoDeEvento" class="form-label text-light">E-mail</label>
                    <input type="text" class="form-control" name="tipoDeEvento" value="<?= $datos->tipoDeEvento ?>">
                </div>
                <div class="mb-1">
                    <label for="servicios_Disponibles" class="servicios_Disponibles">Teléfono</label>
                    <input type="text" class="form-control" name="servicios_Disponibles" value="<?= $datos->servicios_Disponibles ?>">
                </div>
                <div class="mb-1">
                    <label for="fecha_registro_evento" class="fecha_registro_evento">Fecha de Registro</label>
                    <input type="date" class="form-control" name="fecha_registro_evento" value="<?= $datos->fecha_registro_evento ?>">
                </div>
            </div>
        <?php
        }
        ?>
        <div class="d-grid p-3">
            <button type="submit" class="btn btn-info" name="btnregistroEvento" value="ok">Actualizar Evento</button>
        </div>
    </form>
    <!-- Footer -->
    <footer class="text-center text-bg-dark mt-auto py-3 fixed-bottom">
        <small>&copy; 2024. <b>Evento Tecnológico UTPL</b> - Todos los derechos reservados.</small>
    </footer>
    <!-- JavaScrip -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>