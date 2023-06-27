<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title>Agregar Materia</title>    
        
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
                    <form id="loginform" action="../Controller/agregarmateria.php" method="post">
                        <label for="nombre">Nombre Materia</label>
                        <input id="Nombre" type="text" name="txtnombremate" placeholder="Nombre" required>
                        
                        <button type="submit" title="Registrar" name="Registrar">Registrar</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Registro de Materia
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