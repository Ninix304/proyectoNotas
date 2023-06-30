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
        <h1 style="color:beige;text-align: center;">Listado de estudiantes </h1>
        <div col="col-auto-mt-5">

            <table class="table table-dark table-hover">
                <tr>
                    <th>ID Estudiante</th>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Materia</th>
                    <th>Docente</th>
                    <th>Promedio</th>
                    <th>Fecha registro</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>

                </tr>
                <tbody>
                    <?php
                        require_once('../../Conexion.php');
                        require_once('../models/estudiantes.php');
                        $objeto =new Estudiantes();
                        $datos=$objeto->getest();
                    
                        foreach($datos as $datos){
                      
                            ?>
                    <tr>
                        <td><?php echo $datos['id_estudiante'] ?></td>
                        <td><?php echo $datos['Nombreestu'] ?></td>
                        <td><?php echo $datos['Apellidoestu'] ?></td>
                        <td><?php echo $datos['Documentoestu'] ?></td>
                        <td><?php echo $datos['Correoestu'] ?></td>
                        <td><?php echo $datos['Materia'] ?></td>
                        <td><?php echo $datos['Docente'] ?></td>
                        <td><?php echo $datos['Promedio'] ?></td>
                        <td><?php echo $datos['Fecha_registro'] ?></td>
                        <td><a href="editar.php?Id=<?php echo $datos['id_estudiante'] ?>" class="btn btn-primary">ACTUALIZAR</a></td>
                        <td><a href="eliminar.php?Id=<?php echo $datos['id_estudiante'] ?>" class="btn btn-danger">ELIMINAR</a></td>

                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</body>
</html>