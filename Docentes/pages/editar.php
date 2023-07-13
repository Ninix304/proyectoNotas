<html lang="es">

<head>
    <meta charset="utf-8">
    <title> Formulario de Acceso </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body>

    <?php
    require_once('../../Conexion.php');
    require_once('../models/docentes.php');

    $Id = $_GET['Id'];
    $doce = new Docentes();
    $row = $doce->getiddoc($Id);

    if ($row) {


        ?>

        <div id="contenedor">

            <div id="contenedorcentrado">
                <div id="login">
                    <h2>ACTUALIZAR DATOS DE Docente</h2>
                    <form id="loginform" action="../Controller/editardocente.php" method="post">
                        <input id="Id" type="hidden" name="txtiddoc" placeholder="Id" value="<?php echo $Id ?>">
                        <label for="nombre">Nombre </label>
                        <input id="Nombre" type="text" name="txtnombredoc" placeholder="Nombre"
                            value="<?php echo $row['Nombredoc'] ?>">

                        <label for="Apellido">Apellido</label>
                        <input id="Apellido" type="Apellido" placeholder="Apellido" name="txtapellidodoc"
                            value="<?php echo $row['Apellidodoc'] ?>">

                        <label for="Documento">Documento</label>
                        <input id="Documento" type="number" placeholder="Documento" name="txtdocumentodoc"
                            value="<?php echo $row['Documentodoc'] ?>">

                        <label for="Correo">Correo</label>
                        <input id="Correo" type="email" placeholder="Correo" name="txtcorreodoc"
                            value="<?php echo $row['Correodoc'] ?>">

                        <label for="Materia">Materia</label>
                        <input id="Materia" type="text" placeholder="Materia" name="txtmateriadoc"
                            value="<?php echo $row['Materiadoc'] ?>">

                        <label for="Usuario">Usuario</label>
                        <input id="Usuario" type="text" name="txtusuariodoc" placeholder="Usuario"
                            value="<?php echo $row['Usuariodoc'] ?>">

                        <label for="Contraseña">Contraseña</label>
                        <input id="Contraseña" type="password" name="txtcontrasenadoc" placeholder="Contraseña"
                            value="<?php echo $row['Passworddoc'] ?>">

                        <label for="Perfil" value="<?php echo $row['Perfil'] ?>">Perfil</label>
                        <select name="txtperfildoc" id="perfil">
                            
                            <option value="Administrador">Administrador</option>
                            <option selected value="Docente">Docente</option>
                        </select>

                        <label for="Estado" value="<?php echo $row['Estadodoc'] ?>">Estado</label>
                        <select name="txtestadodoc" id="Estado">
                            <option selected>Elegir opcion</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>

                        </select>
                        <button type="submit" title="Actualizar" name="Actualizar">Actualizar</button>
                    </form>
                <?php } ?>
            </div>
            <div id="derecho">
                <div class="titulo">
                    Actualizacion de docente
                </div>
                <hr>
                <div class="pie-form">
                    <hr>
                    <a href="index.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>