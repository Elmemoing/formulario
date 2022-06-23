<?php

include 'db.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

if ($editar == "si") {
    $query = "UPDATE persona SET nombre='" . $nombre . "', apellido='" . $apellido . "' WHERE cedula='" . $cedula . "'";
} else {
    $query = "INSERT INTO persona (cedula, nombre, apellido) VALUES 
        ('$cedula', '$nombre', '$apellido')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo ("Se Actualizo la persona");
    } else {
        echo ("Se Registro la persona");
    }
} else {
    if ($editar == "si") {
        echo ("No se pudo actualizar la persona");
    } else {
        echo ("No se pudo registrar la persona");
    }
}

mysqli_close($conexiondb);
?>

<style>
h1 {
    color: rgb(19, 19, 19);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
img.logotipo{
    width: 50px; height: 50px;
    float: left
  }
  * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    
    body { 
      font-family: 'calibri';
      background: #C9D6FF; 
      background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);
      background: linear-gradient(to right, #E2E2E2, #C9D6FF); 
      
    }
    
    header {
      background: #303131;
      width: 100%;
      clear: both;
      content:'';
      display: table;
    }
    
    .menu {
      width: 900px;
      margin: 0 auto;
    }
    
    
    nav {
      float: left;
    }
    
    nav ul li {
      list-style: none;
      margin-left: 75px;
      padding: 12px 0;
      float: left;
      position: relative;
    }
    
    nav ul li a {
      text-decoration: none;
      color: ivory;
      font-weight: bold;
    }
    
    nav ul li a::before {
      display: block;
      content: '';
      width: 0%;
      background: rgb(255, 255, 255);
      height: 5px;
      top:0;
      position: absolute;
      transition: width 0.2s;
    }
    
    nav ul li a:hover::before {
      width: 100%;
    }
  
    h1{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
  
    lead{
      background-color: bisque;
    }
</style>