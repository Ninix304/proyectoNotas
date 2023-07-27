<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Iniciar sesión</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="text-center">
            <img src="img/user.png" class="rounded mx-auto d-block" width="250" height="250">
        </div>
        <div class="shadow p-3 mt-3">
            <form action="Usuarios/controller/usuarioscontrol.php" method="post">
                <h1>Inicio de sesión</h1>
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="txtusuario">
                <label class="form-label">Contraseña</label>
                <input class="form-control" type="password" name="txtcontrasena">

                <div class="mt-3">
                    <input type="submit" class="btn btn-primary mb-3" value="Iniciar sesión">
                    <h2>¿No tiene cuenta?</h2>
                    <a href="Administrador/pages/agregar.php">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>