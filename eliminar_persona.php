<?php

    require 'db.php';

    $id_persona = $_GET['id_persona'];

    $conexiondb = conectardb();

    $query = "DELETE FROM persona WHERE id_persona=".$id_persona;

    $respuesta = mysqli_query($conexiondb, $query);

    if ($respuesta) {
        echo ("<script>alert('Se elimino el registro');
        window.location.href='listar_persona.php'</script>");
    } else {
        echo ("<script>alert('No se elimino el registro');
        window.location.href='listar_persona.php'</script>");
    }
?>