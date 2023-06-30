<?php
require_once('../../Conexion.php');
require_once('../models/docentes.php');

$id = $_GET['Id'];

$consultas =new Docentes();
$result = $consultas->deletedo($id);
?>