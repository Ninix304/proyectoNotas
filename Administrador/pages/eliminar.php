<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>ELIMINAR USUARIO</h2>
    <?PHP
        require_once('../../Conexion.php');
        require_once('../models/administrador.php');
        
        $admin = new Administrador();
        $Id = $_GET['Id'];
    ?>
    <form action="../controller/eliminarusuario.php" method="post">
        <div class="form-group">
        <label>ID USUARIO</label>
        <input type="number" name="Id" placeholder="Igresar el id a eliminar">
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Eliminar">
    </form>
</body>
</html>