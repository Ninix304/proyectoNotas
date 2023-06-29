<?php
   require_once('../../Conexion.php');
   require_once('../models/administrador.php');

   $ad=new Administrador();

   if($_SERVER['REQUEST_METHOD'=='POST']){
    $Id = $_POST['Id'];
    $result=$ad->deletead($Id);

    if($result){
        print "<script>alert('usuario eliminado');
        window.location='../pages/index.php';</script>";
    }else{
        print "<script>alert('usuario no eliminado');
        window.location='../pages/eliminar.php';</script>";
    }

   }
?>