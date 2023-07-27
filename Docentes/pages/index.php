<!DOCTYPE html>
<html lang="en">
<?php require_once('../../Usuarios/controller/validar.php') ?>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentosajajajajajkajaj</title>
    <?php require_once('../../Usuarios/controller/validar.php') ?>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <div class="container">
    <h2>BIENVENIDO :<?php echo $_SESSION["usuario"]; ?>
        <h1 style="text-align: center;">Listado de Docentes </h1>
        <div col="col-auto-mt-5">

            <table class="table table-dark table-hover">
                <tr>
                    <th>ID USUARIO</th>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Materia</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>

                </tr>
                <tbody>
                    <?php
                    require_once('../../Conexion.php');
                    require_once('../models/docentes.php');
                    $objeto = new Docentes();
                    $datos = $objeto->getdoc();

                    foreach ($datos as $datos) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $datos['id_docente'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Nombredoc'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Apellidodoc'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Documentodoc'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Correodoc'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Materiadoc'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Usuariodoc'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Perfil'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Estadodoc'] ?>
                            </td>
                            <td><a href="editar.php?Id=<?php echo $datos['id_docente'] ?>"
                                    class="btn btn-primary">ACTUALIZAR</a></td>
                            <td><a href="../controller/eliminardocente.php?Id=<?php echo $datos['id_docente'] ?>"
                                    class="btn btn-warning">ELIMINAR</a></td>

                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        <a href="../../inicio.php" class="btn btn-success">« Volver</a>
    </div>
</body>

</html>