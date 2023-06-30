<?php
require_once('../../Conexion.php');
require_once('../models/administrador.php');

$id = $_GET['Id'];

$consultas =new Administrador();
$result = $consultas->deletead($id);
?>