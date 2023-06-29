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
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" action="../Controller/Agregarestudiante.php" method="post">
                        <label for="nombre">Nombre </label>
                        <input id="Nombre" type="text" name="txtnombreest" placeholder="Nombre" required>
                        
                        <label for="Apellido">Apellido</label>
                        <input id="Apellido" type="Apellido" placeholder="Apellido" name="txtapellidoest" required>
                        
                        <label for="Documento">Documento</label>
                        <input id="Documento" type="number" placeholder="Documento" name="txtdocumentodoc" required>
                        
                        <label for="Correo">Correo</label>
                        <input id="Correo" type="email" placeholder="Correo" name="txtcorreoest" required>
                        
                        <label for="Materia">Materia</label>
                        <select name="txtmateriaest" id="Materia">
                            <option selected>Elegir opcion</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Docente">Docente</option>
                        </select>

                        <label for="Materia">Materia</label>
                        <select name="txtmateriaest" id="Materia">
                            <option selected>Elegir opcion</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Docente">Docente</option>
                        </select>
                        <label for="Promedio">Promedio</label>
                        <input id="Promedio" type="number" name="txtpromedioest" placeholder="Contraseña" required>
                       
                        <label for="Fechaest">Fecha de registro</label>
                        <input id="Fechaest" type="number" name="txtfechaest" placeholder="Contraseña" required>
                       

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
                        <a href="../../index.php">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>