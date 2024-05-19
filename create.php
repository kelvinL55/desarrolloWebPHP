<?php
    require 'conexion.php';

    if(!empty($_POST["btnregistrar"])) {

        if (!empty($_POST["nombre"]) and !empty($_POST["cedula"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"]) and !empty($_POST["rol"]) and !empty($_POST["fecha_registro"])) {
            $nombre = $_POST["nombre"];
            $cedula = $_POST["cedula"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $rol = $_POST["rol"];
            $fecha_registro = $_POST["fecha_registro"];

            $sql=$conexion->query("insert into usuarios(nombre,cedula,correo,telefono,rol,fecha_registro) values('$nombre','$cedula','$correo','$telefono','$rol','$fecha_registro')");
            if ($sql==1) {
                echo '<div class="alert alert-success">Usuario registrado</div>';
            } else {
                echo '<div class="alert alert-danger">Error registro de Usuario</div>';
            }
            
        }else {
            echo '<div class="alert alert-success">Complete todos los campos</div>';
        } ?>
        <script>
            history.replaceState(null,null,location.pathname)
        </script>

    <?php }
?>