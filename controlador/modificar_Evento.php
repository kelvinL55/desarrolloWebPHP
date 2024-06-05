<?php
include "conexionEvento.php";

if (!empty($_POST["btnregistroEvento"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombreEvento"]) and !empty($_POST["usuario"]) and !empty($_POST["tipoDeEvento"]) and !empty($_POST["servicios_Disponibles"]) and !empty($_POST["fecha_registro_evento"])) {
        $id = $_POST["id"];
        $nombreEvento = $_POST["nombreEvento"];
        $usuario = $_POST["usuario"];
        $tipoDeEvento = $_POST["tipoDeEvento"];
        $servicios_Disponibles = $_POST["servicios_Disponibles"];
        $fecha_registro_evento = $_POST["fecha_registro_evento"];
        $sql = $conexionEvento->query(" update evento set nombreEvento='$nombreEvento', usuario='$usuario', tipoDeEvento=' $tipoDeEvento', servicios_Disponibles='$servicios_Disponibles', fecha_registro_evento='$fecha_registro_evento' where id= $id");
        if ($sql == 1) {
            header("location:registroEvento.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar el Evento</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Capos vacios</div>';
    }
}
