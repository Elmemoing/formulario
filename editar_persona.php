<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>

<body>

    <?php
    include('menu.php')
    ?>

    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $id_persona = $_GET['id_persona'];
    $query = "SELECT * FROM persona WHERE id_persona=" . $id_persona;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>


    <h1>Editar Persona</h1>

    <form action="guardar_persona.php" method="post">
        <table border="0">
            <tr>
                <th><b><label for="">Nombre:</label></b></th>
                <th><input type="text" name="nombre" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>

            <tr>
                <th><b><label for="">Apellido:</label></b></th>
                <th><input type="text" name="apellido" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>
        </table>
        <input type="hidden" name="id_persona" id="" value='<?php echo $persona[0] ?>' readonly>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input type="submit" value="GUARDAR">
    </form>

</body>

</html>