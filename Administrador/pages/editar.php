<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        
        <link rel="stylesheet" href="../../css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        <?php
            require_once('../../Conexion.php');
            require_once('../models/administrador.php');

            $Id = $_GET['Id'];
            $admin = new Administrador();
            $row = $admin->getidad($Id);

            if($row ){
        ?>
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" action="../controller/editarusuario.php" method="post">
                        <input type="hidden" name="Id" value="<?php echo $Id ?>">
                        <label for="nombre">Nombre</label>
                        <input id="Nombre" type="text" name="txtnombre" placeholder="Nombre" value="<?php echo $row['Nombreusu'] ?>" required>
                        
                        <label for="Apellido">Apellido</label>
                        <input id="Apellido" type="Apellido" placeholder="Apellido" name="txtapellido" value="<?php echo $row['Apellidousu'] ?>" required>
                        
                        <label for="Usuario">Usuario</label>
                        <input id="Usuario" type="text" name="txtusuario" placeholder="Usuario" value="<?php echo $row['Usuario'] ?>" required>
                        
                        <label for="Contraseña">Contraseña</label>
                        <input id="Contraseña" type="password" name="txtcontrasena" placeholder="Contraseña" value="<?php echo $row['Passwordusu'] ?>" required>
                        
                        <label for="Perfil">Perfil</label>
                        <select name="txtperfil" id="perfil" value="<?php echo $row['Perfil'] ?>">
                            <option selected>Elegir opcion</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Docente">Docente</option>
                        </select>
                        
                        <label for="Estado">Estado</label>
                        <select name="txtestado" id="Estado" value="<?php echo $row['Estado'] ?>">
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
                        Actualizacion de ususaurio
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