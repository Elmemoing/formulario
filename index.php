<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://avatars.githubusercontent.com/u/74156373?s=96&v=4" sizes="16x16">
</head>

<body>
    <header>
        <div class="menu">
          <nav>
              <ul> 
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <img class="logotipo" src="https://avatars.githubusercontent.com/u/74156373?s=96&v=4">
                <li><a href=index.php>Inicio</a></li>
                <li><a href=listar_persona.php>Datos Guardados</a></li>
                <li><a href="reporte_persona">Crear PDF</a></li>
              </ul>
          </nav>
        </div>
    </header>
    <div class="col-sm-4 offset-sm-4">
        <br>
        <form action="guardar_persona.php" method="post">

            <!--<input type="hidden" name="">-->

            <H3><th><b><label for="">COMPLETE EL FORMULARIO:</label></b></th></H3>

                    <div class="mb-3">
                        <th><b><label for="">Cedula:</label></b></th>
                        <th><input class="form-control" type="text" name="cedula" id=""></th>
                    </div>


                    <div class="mb-3">
                        <th><b><label for="">Nombre:</label></b></th>
                        <th><input class="form-control" type="text" name="nombre" id=""></th>
                    </div>
     
                    <div class="mb-3">
                        <th><b><label for="">Apellido:</label></b></th>
                        <th><input class="form-control" type="text" name="apellido" id=""></th>
                    </div>
  
        
            <input type="hidden" name="editar" id="" value='no' readonly>
            <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
        </form>
    </div>

    <link rel="stylesheet" href="./css/index.css">
</body>

</html>