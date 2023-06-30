<?php
require_once('../../Conexion.php');
require_once('../models/materias.php');

$id = $_GET['Id'];

$consultas =new Materia();
$result = $consultas->deletemate($id);
?>