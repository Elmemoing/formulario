<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Personas</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="./css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Esta linea de abajo sirve para el icono de la página que queramos -->
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
  <?php
  include 'db.php';
  $conexiondb = conectardb();
  $query = "SELECT * FROM persona";
  $resultado = mysqli_query($conexiondb, $query);
  mysqli_close($conexiondb);
  ?>

  <div class="container center">
    <div class="row">
      <div class="col-md-4 mt-3">
        <?php
        if (isset($_COOKIE['message'])) {
          echo "<div class='alert " . $_COOKIE['alert'] . " alert-dismissible fade show' role='alert'>";
          echo $_COOKIE['message'];
          echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
          echo "</div>";
          setcookie('message', '', 1);
          setcookie('alert', '', 1);
        }
        ?>
      </div>

      <div class="col-sm-6">
        <h1 class="text-center  mt-4">Listado de Personas</h1>

        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">N</th>
              <th scope="col">Cédula</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $index = 1;
            while ($persona = mysqli_fetch_assoc($resultado)) {
              echo "<tr>";
              echo "<th scope='row'>" . $index++ . "</th>";
              echo "<td>" . $persona['cedula'] . "</td>";
              echo "<td>" . $persona['nombre'] . "</td>";
              echo "<td>" . $persona['apellido'] . "</td>";
              echo "<td>";
              echo "<a href='editar_persona.php?cedula=" . $persona['cedula'] . "' class='btn btn-outline-primary mx-1 my-1'> <i class=for='btnradio1'>Editar</i> </a>";
              echo "<a href='eliminar_persona.php?cedula=" . $persona['cedula'] . "' class='btn btn-outline-primary mx-1 my-1'> <i class=for='btnradio1'>Borrar</i> </a>";
              echo "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        const btnDelete = document.querySelectorAll('.btn-danger');
        if (btnDelete) {
          const btnArray = Array.from(btnDelete);
          btnArray.forEach((btn) => {
            btn.addEventListener('click', (e) => {
              if (!confirm('Estàs seguro de eliminarlo?')) {
                e.preventDefault();
              }
            });
          })
        }
      </script>
</body>

</html>