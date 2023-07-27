<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once('../../Usuarios/controller/validar.php');

  ?>
    <title>Listado de usuarios</title>

</head>

<body>

    <div class="container">
    <h2>BIENVENIDO :<?php echo $_SESSION["usuario"]; ?>

        <h1 style="text-align: center;">Listado de usuarios </h1>

        <div col="col-auto-mt-5">

            <table class="table table-dark table-hover">
                <tr>
                    <th>ID USUARIO</th>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>

                </tr>
                <tbody>
                    <?php
                    require_once('../../Conexion.php');
                    require_once('../models/administrador.php');
                    $objeto = new Administrador();
                    $datos = $objeto->getad();

                    foreach ($datos as $datos) {

                        ?>
                        <tr>
                            <td>
                                <?php echo $datos['id_usuario'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Nombreusu'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Apellidousu'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Usuario'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Perfil'] ?>
                            </td>
                            <td>
                                <?php echo $datos['Estado'] ?>
                            </td>
                            <td><a href="editar.php?Id=<?php echo $datos['id_usuario'] ?>"
                                    class="btn btn-primary">ACTUALIZAR</a></td>

                            <td><a href="../Controller/eliminarusuario.php?Id=<?php echo $datos['id_usuario'] ?>"
                                    class="btn btn-danger">ELIMINAR</a></td>


                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        <a href="../../inicio.php" class="btn btn-success">« Volver</a>
    </div>
</body>

</html>