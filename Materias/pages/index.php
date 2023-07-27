<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materias</title>
</head>

<body>
<?php require_once('../../Usuarios/controller/validar.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <div class="container">
        <h1 style="text-align: center;">Listado de Materias </h1>
        <div col="col-auto-mt-5">
        <h2>BIENVENIDO :<?php echo $_SESSION["usuario"]; ?>
            <table class="table table-dark table-hover">
                <tr>
                    <th>ID MATERIA</th>
                    <th>Nombre</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
                <tbody>
                    <?php
                    require_once('../../Conexion.php');
                    require_once('../models/materias.php');
                    $objeto = new Materia();
                    $datos = $objeto->getmate();

                    foreach ($datos as $datos) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $datos['id_materia'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Nombremate'] ?>
                            </td>
                            <td><a href="editar.php?Id=<?php echo $datos['id_materia'] ?>"
                                    class="btn btn-primary">ACTUALIZAR</a></td>
                            <td><a href="../controller/eliminarmateria.php?Id=<?php echo $datos['id_materia'] ?>"
                                    class="btn btn-warning">ELIMINAR</a></td>

                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        <a href="../../Usuarios/controller/salir.php" class="btn btn-success">« Volver</a>
    </div>
</body>

</html>