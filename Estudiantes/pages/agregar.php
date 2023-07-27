<html lang="es">
<head>
    <meta charset="utf-8">
    <title> Registrar estudiante </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body>
    <?php
    require_once('../../Conexion.php');
    require_once('../../consultas.php');

    $consul = new Consulta();
    ?>

    <div id="contenedor">

        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" action="../Controller/Agregarestudiante.php" method="post">
                    <label for="nombre">Nombre </label>
                    <input id="Nombre" type="text" name="txtnombreest" placeholder="Nombre" required>

                    <label for="Apellido">Apellido</label>
                    <input id="Apellido" type="Apellido" placeholder="Apellido" name="txtapellidoest" required>

                    <label for="Documento">Documento</label>
                    <input id="Documento" type="number" placeholder="Documento" name="txtdocumentoest" required>

                    <label for="Correo">Correo</label>
                    <input id="Correo" type="email" placeholder="Correo" name="txtcorreoest" required>

                    <label for="Docente">Docente</label>
                    <select name="txtdocente" id="Docente">
                        <option selected>Elegir opcion</option>
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
                    <select name="txtmateriaest" id="Materia">
                        <option>Elegir opcion</option>
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
                    <input id="Promedio" type="number" name="txtpromedioest" placeholder="Contraseña" required>

                    <label for="Fechaest">Fecha de registro</label>
                    <input id="Fechaest" type="date" name="txtfechaest" placeholder="Contraseña" required>


                    <button type="submit" title="Registrar" name="Registrar">Registrar</button>
                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Registro de Estudiantes
                </div>
                <hr>
                <div class="pie-form">
                    <hr>
                    <a href="../../inicio.php">« Volver</a>
                    <a href="../../Usuarios/controller/salir.php" class="btn btn-danger">« Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>