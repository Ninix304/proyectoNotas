<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title>Actualizar Materia</title>    
        
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
            require_once('../models/materias.php');

            $Id = $_GET['Id'];
            $materia = new Materia();
            $row = $materia->getidmate($Id);

            if($row ){
        ?>
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" action="../controller/editarmateria.php" method="post">
                        <input type="hidden" name="Id" value="<?php echo $Id ?>">
                        <label for="nombre">Nombre</label>
                        <input id="Nombre" type="text" name="txtnombre" placeholder="Nombre" value="<?php echo $row['Nombremate'] ?>" required>

                        <button type="submit" title="Actualizar" name="Actualizar">Actualizar</button>
                    </form>
                    <?php } ?>
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Actualización de Materia
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