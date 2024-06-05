<?php
include "conexion.php";

if (!empty($_POST["btnregistro"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["cedula"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha_registro"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $cedula = $_POST["cedula"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $fecha_registro = $_POST["fecha_registro"];
        $sql = $conexion->query(" update usuarios set nombre='$nombre', cedula='$cedula', correo=' $correo', telefono='$telefono', fecha_registro='$fecha_registro' where id= $id");
        if ($sql == 1) {
            header("location:registroUsuarios.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar usuario</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Capos vacios</div>';
    }
}
