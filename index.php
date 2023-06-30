<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/inicioSesion.css">
    <title>Iniciar sesion</title>
</head>
<body>
    <div name="content">
        <div id="imagen">
            <img src="img/user.png" width="250" height="250">
        </div>
        <div class="form">
            <form action="" method="post">
                <h1>Inicio de sesión</h1>
                <h2>Para acceder a todas sus funciones</h2>
                <Label>Usuario</Label>
                <input type="text" name="txtusuario">
                <Label>Contraseña</Label>
                <input type="text" name="txtcontrasena">
                <a href="Administrador/pages/editar.php">Contraseña olvidada?</a>
                <input type="submit" value="Iniciar sesión">
                <h2>No tiene cuenta?</h2>
                <a href="Administrador/pages/agregar.php">Inscribirse</a>
            </form>
        </div>
    </div>
</body>
</html>