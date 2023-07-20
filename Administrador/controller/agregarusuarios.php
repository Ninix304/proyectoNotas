<?php
require_once('../../Conexion.php');
require_once('../models/Administrador.php');

if($_POST){
    $admin=new Administrador();
    $nombreusu=$_POST['txtnombre'];
    $apellidousu=$_POST['txtapellido'];
    $usuariousu=$_POST['txtusuario'];
    $passwordusu=($_POST['txtcontrasena']);
    $perfil=$_POST['txtperfil'];
    $estadousu=$_POST['txtestado'];
    $admin->agregarad($nombreusu,$apellidousu,$usuariousu,$passwordusu,$perfil,$estadousu);
}
?>