<?php
require 'conexionEvento.php';

if (!empty($_POST["btnregistrar"])) {

    if (!empty($_POST["nombreEvento"]) and !empty($_POST["usuario"]) and !empty($_POST["tipoDeEvento"]) and !empty($_POST["servicios_Disponibles"]) and !empty($_POST["fecha_registro_evento"])) {
        $nombreEvento = $_POST["nombreEvento"];
        $usuario = $_POST["usuario"];
        $tipoDeEvento = $_POST["tipoDeEvento"];
        $servicios_Disponibles = $_POST["servicios_Disponibles"];
        $fecha_registro_evento = $_POST["fecha_registro_evento"];

        $sql = $conexionEvento->query("insert into evento(nombreEvento,usuario,tipoDeEvento,servicios_Disponibles,fecha_registro_evento) values('$nombreEvento','$usuario','$tipoDeEvento','$servicios_Disponibles','$fecha_registro_evento')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Evento registrado</div>';
        } else {
            echo '<div class="alert alert-danger">Error registro de Evento</div>';
        }
    } else {
        echo '<div class="alert alert-success">Complete todos los campos</div>';
    } ?>

    <script>
        history.replaceState(null, null, location.pathname);
    </script>

<?php }
?>