<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentosajajajajajkajaj</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="container">
        <h1 style="color:beige;text-align: center;">Listado de usuarios </h1>
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
                        $objeto =new Administrador();
                        $datos=$objeto->getad();
                    
                        foreach($datos as $datos){
                      
                            ?>
                    <tr>
                        <td><?php echo $datos['id_usuario'] ?></td>
                        <td><?php echo $datos['Nombreusu'] ?></td>
                        <td><?php echo $datos['Apellidousu'] ?></td>
                        <td><?php echo $datos['Usuario'] ?></td>
                        <td><?php echo $datos['Perfil'] ?></td>
                        <td><?php echo $datos['Estado'] ?></td>
                        <td><a href="editar.php?Id=<?php echo $datos['id_usuario'] ?>" class="btn btn-primary">ACTUALIZAR</a></td>
                        <td><a href="../Controller/eliminarusuario.php?Id=<?php echo $datos['id_usuario'] ?>" class="btn btn-danger">ELIMINAR</a></td>

                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</body>
</html>