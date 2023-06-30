<?php
require_once('../../Conexion.php');
require_once('../models/estudiantes.php');

$id = $_GET['Id'];

$consultas =new Estudiantes();
$result = $consultas->deleteest($id);
?>
