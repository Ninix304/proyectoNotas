<?php
require_once('../../Conexion.php');
require_once('../models/administrador.php');

if($_POST){
    //crear un objeto de la clase administrador
    $admin = new Administrador();
    $Nombreusu = $_POST['txtnombre'];
    $Apellidousu = $_POST['txtapellido'];
    $Usuariousu = $_POST['txtusuario'];
    $Passwordusu = md5($_POST['txtconstrasena']);
    $Perfil = $_POST['txtperfil'];
    $Estadousu = $_POST['txtestado'];

    $admin->agregarad($Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Perfil, $Estadousu);
}



?>