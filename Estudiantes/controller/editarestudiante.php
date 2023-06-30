<?php
require_once('../../Conexion.php');
require_once('../models/estudiantes.php');

$estu=new Estudiantes();
if($_POST){
  
    $Id=$_POST['txtidest'];
    $nombreest=$_POST['txtnombreest'];
    $apellidoest=$_POST['txtapellidoest'];
    $documentoest=$_POST['txtdocumentoest'];
    $correoest=$_POST['txtcorreoest'];
    $materia=$_POST['txtmateriaest'];
    $docente=$_POST['txtdocente'];
    $promedio=$_POST['txtpromedioest'];
    $fechaReg=$_POST['txtfechaest'];
    
    $estu->updateest($Id,$nombreest,$apellidoest,$documentoest,$correoest,$materia,$docente,$promedio,$fechaReg);
}
?>