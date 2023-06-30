<?php
require_once('../../Conexion.php');
require_once('../models/Administrador.php');

$admin=new Administrador();
if($_POST){
  
    $Id=$_POST['txtid'];
    $nombreusu=$_POST['txtnombre'];
    $apellidousu=$_POST['txtapellido'];
    $usuariousu=$_POST['txtusuario'];
    $passwordusu=MD5($_POST['txtcontrasena']);
    $perfil=$_POST['txtperfil'];
    $estadousu=$_POST['txtestado'];
    $admin->updatead($Id,$nombreusu,$apellidousu,$usuariousu,$passwordusu,$perfil,$estadousu);
}
?>