<?php
$menu = <<<END
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">CENTRO DE VACUNACION</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Registrar Datos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Listar_persona.php">Listado</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="reporte_personas.php">Generar PDF</a>
                    </li>
            </div>
</header>
END;

echo($menu); 

?>