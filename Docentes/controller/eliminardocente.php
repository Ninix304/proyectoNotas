<?php
   require_once('../../Conexion.php');
   require_once('../models/docentes.php');

   $ad=new Docentes();

   if($_SERVER['REQUEST_METHOD']=='POST'){
    $Id = $_POST['Id'];
    $result=$ad->deletedo($Id);

    if($result){
        print "<script>alert('usuario eliminado');
        window.location='../pages/index.php';</script>";
    }else{
        print "<script>alert('usuario no eliminado');
        window.location='../pages/eliminar.php';</script>";
    }

   }
?>