<?php
require_once('../../Conexion.php');
require_once('../models/materias.php');

if($_POST){
    $materia=new Materia();
    $nombremate=$_POST['txtnombremate'];

    $materia->agregarmate($nombremate);
}
?>