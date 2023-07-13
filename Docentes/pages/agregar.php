<html lang="es">

<head>
    <meta charset="utf-8">
    <title> Formulario de Acceso </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body>

    <div id="contenedor">

        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" action="../Controller/Agregardocente.php" method="post">
                    <label for="nombre">Nombre </label>
                    <input id="Nombre" type="text" name="txtnombredoc" placeholder="Nombre" required>

                    <label for="Apellido">Apellido</label>
                    <input id="Apellido" type="Apellido" placeholder="Apellido" name="txtapellidodoc" required>

                    <label for="Documento">Documento</label>
                    <input id="Documento" type="number" placeholder="Documento" name="txtdocumentodoc" required>

                    <label for="Correo">Correo</label>
                    <input id="Correo" type="email" placeholder="Correo" name="txtcorreodoc" required>

                    <label for="Materia">Materia</label>
                    <input id="Materia" type="text" placeholder="Materia" name="txtmateriadoc" required>

                    <label for="Usuario">Usuario</label>
                    <input id="Usuario" type="text" name="txtusuariodoc" placeholder="Usuario" required>

                    <label for="Contraseña">Contraseña</label>
                    <input id="Contraseña" type="password" name="txtcontrasenadoc" placeholder="Contraseña" required>

                    <label for="Perfil">Perfil</label>
                    <select name="txtperfildoc" id="perfil">
                        <option selected>Elegir opcion</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Docente">Docente</option>
                    </select>

                    <label for="Estado">Estado</label>
                    <select name="txtestadodoc" id="Estado">
                        <option selected>Elegir opcion</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>

                    <button type="submit" title="Registrar" name="Registrar">Registrar</button>
                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Registro de Docentes
                </div>
                <hr>
                <div class="pie-form">
                    <hr>
                    <a href="../../inicio.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>