<html lang="es">
<head>
    <meta charset="utf-8">
    <title> Editar estudiante </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body>
    <?php
    require_once('../../Conexion.php');
    require_once('../../consultas.php');
    require_once('../models/estudiantes.php');

    $consul = new Consulta();
    
    $Id = $_GET['Id'];
    $est = new Estudiantes();
    $row = $est->getidest($Id);

    if ($row) {

        ?>
        <div id="contenedor">
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" action="../Controller/editarestudiante.php" method="post">
                        <label for="nombre">ID</label>
                        <input id="Nombre" type="text" name="txtidest" value="<?php echo $Id ?>" readonly>

                        <label for="nombre">Nombre </label>
                        <input id="Nombre" type="text" name="txtnombreest" value="<?php echo $row['Nombreestu'] ?>">

                        <label for="Apellido">Apellido</label>
                        <input id="Apellido" type="text" name="txtapellidoest" value="<?php echo $row['Apellidoestu'] ?>">

                        <label for="Documento">Documento</label>
                        <input id="Documento" type="number" name="txtdocumentoest"
                            value="<?php echo $row['Documentoestu'] ?>">

                        <label for="Correo">Correo</label>
                        <input id="Correo" type="email" name="txtcorreoest" value="<?php echo $row['Correoestu'] ?>">

                        <label for="Docente">Docente</label>
                        <select name="txtdocente" id="Docente" value="<?php echo $row['Docente'] ?>" required>

                            <?php
                            $doce = $consul->getdocentes();
                            if ($doce != null) {
                                foreach ($doce as $do) {
                                    ?>
                                    <option value="<?php echo $do['Nombredoc']; ?>"><?php echo $do['Nombredoc']; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>

                        <label for="Materia">Materia</label>
                        <select name="txtmateriaest" id="Materia" value="<?php echo $row['Materia'] ?>" required>

                            <?php
                            $mate = $consul->getmaterias();
                            if ($mate != null) {
                                foreach ($mate as $ma) {
                                    ?>
                                    <option value="<?php echo $ma['Nombremate']; ?>"><?php echo $ma['Nombremate']; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>

                        <label for="Promedio">Promedio</label>
                        <input id="Promedio" type="number" name="txtpromedioest" value="<?php echo $row['Promedio'] ?>">

                        <label for="Fechaest">Fecha de registro</label>
                        <input id="Fechaest" type="date" name="txtfechaest" value="<?php echo $row['Fecha_registro'] ?>">


                        <button type="submit" title="Registrar" name="Registrar">ACTUALIZAR</button>
                    </form>
                <?php } ?>
            </div>
            <div id="derecho">
                <div class="titulo">
                    Actualización de Estudiantes
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