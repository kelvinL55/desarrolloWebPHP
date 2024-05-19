<?php
include "conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("select *from usuarios where id =$id");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Modificar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-info"> Actualizar Usuarios</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/modificar_user.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="bg-dark p-3 border rounded shadow">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label  text-light">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label text-light">Cédula</label>
                    <input type="text" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label text-light">E-mail</label>
                    <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label text-light">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" value="<?= $datos->telefono ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label text-light">Rol</label>
                    <input type="text" class="form-control" name="rol" value="<?= $datos->rol ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label text-light">Fecha de Registro</label>
                    <input type="date" class="form-control" name="fecha_registro" value="<?= $datos->fecha_registro ?>">
                </div>
            </div>
        <?php
        }
        ?>
        <div class="d-grid p-3">
            <button type="submit" class="btn btn-info" name="btnregistro" value="ok">Actualizar Registro</button>
        </div>
    </form>
</body>

</html>