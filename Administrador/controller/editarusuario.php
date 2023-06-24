<?php
include_once('../../Conexion.php');
include_once('../models/administrador.php');
$admin = new Administrador();

if($_POST){
$Id = $_POST['Id'];
$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$Usuario = $_POST['txtusuario'];
$Passwordusu = $_POST['txtcontrasena'];
$Perfil = $_POST['txtperfil'];
$Estadousu = $_POST['txtestado'];

$admin->updatead($Id,$Nombreusu, $Apellidousu, $Usuario, $Passwordusu, $Perfil, $Estadousu);
}
?>