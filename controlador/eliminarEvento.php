<?php
include "conexionEvento.php";
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexionEvento->query("delete from evento where id=$id");
    if ($sql == 1) {
        echo '<div class="alert alert-success"> Evento eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el Evento</div>';
    }
}
