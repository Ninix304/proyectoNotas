<?php
require_once('Usuarios/controller/validar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .bg-image {
      background-image: url("img/fondoInicio.jpg");
      background-size: cover;
      background-position: center;
    }
  </style>
  <title>Inicio</title>
</head>

<body>


  <div class="bg-image">
  <h2>BIENVENIDO: <?php echo $_SESSION["usuario"]; ?>
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="shadow p-3 bg-white rounded">
      <h1 class="text-center">Bienvenido: <?php echo $_SESSION["usuario"]; ?></h1>  
      <h1 class="text-center">Inicio</h1>
        <h1>Agregar:</h1>
        <a href="Administrador/pages/agregar.php" class="btn btn-info btn-lg">Administrador</a>
        <a href="Docentes/pages/agregar.php" class="btn btn-info btn-lg">Docente</a>
        <a href="Materias/pages/agregar.php" class="btn btn-info btn-lg">Materia</a>
        <a href="Estudiantes/pages/agregar.php" class="btn btn-info btn-lg">Estudiante</a>
        <h1 class="mt-3">Listar:</h1>
        <a href="Administrador/pages/index.php" class="btn btn-outline-dark btn-lg">Administradores</a>
        <a href="Docentes/pages/index.php" class="btn btn-outline-dark btn-lg">Docentes</a>
        <a href="Materias/pages/index.php" class="btn btn-outline-dark btn-lg">Materias</a>
        <a href="Estudiantes/pages/index.php" class="btn btn-outline-dark btn-lg">Estudiantes</a>
        <div class="mt-5">
          <a href="Usuarios/controller/salir.php" class="btn btn-success btn-sm">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>