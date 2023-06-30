<?php
include_once('../../Conexion.php');
include_once('../models/materias.php');
$materia = new Materia();

if($_POST){
$Id = $_POST['Id'];
$Nombremate = $_POST['txtnombre'];

$materia->updatemate($Id,$Nombremate);
}
?>