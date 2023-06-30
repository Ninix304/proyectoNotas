<?php
require_once('../../Conexion.php');
require_once('../models/estudiantes.php');

if($_POST){
    $estudiante=new Estudiantes();
    $nombreest=$_POST['txtnombreest'];
    $apellidoest=$_POST['txtapellidoest'];
    $documentoest=$_POST['txtdocumentoest'];
    $correoest=$_POST['txtcorreoest'];
    $materiaest=$_POST['txtmateriaest'];
    $docenteest=$_POST['txtdocente'];
    $promedioest=$_POST['txtpromedioest'];
    $fechaest=$_POST['txtfechaest'];

    $estudiante->agregarest($nombreest,$apellidoest,$documentoest,$correoest,$materiaest,$docenteest,$promedioest,$fechaest);
}
?>