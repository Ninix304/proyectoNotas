<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Eliminar Materia</title>
</head>
<body>
    <h2>ELIMINAR MATERIA</h2>
    <?PHP
        require_once('../../Conexion.php');
        require_once('../models/materias.php');
        
        $mate = new Materia();
        $Id = $_GET['Id'];
    ?>
    <form action="../controller/eliminarmateria.php" method="post">
        <div class="form-group">
        <label>ID Materia</label>
        <input type="number" name="Id" placeholder="Igresar el id a eliminar">
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Eliminar">
    </form>
</body>
</html>