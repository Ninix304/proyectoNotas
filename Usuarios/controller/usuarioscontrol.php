<?php
    require_once('../../Conexion.php');
    require_once('../models/usuarios.php');

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $usuario=$_POST['txtusuario'];
        $contrasena= $_POST['txtcontrasena'];

        $use=new Usuario();
         $use->login($usuario,$contrasena);

         if($use->isinicioid()){
            if($use->isadmin()){
                header('location:../../inicio.php');
            }
            elseif($use->isdocen()){
                header('Location:../../iniciodoc.php');
            }
            exit();
         }
         else{
            print "<script>alert(\"verificar los datos de ingreso\");
            window.location='../../index.php';</script>";
         }
    }

?>