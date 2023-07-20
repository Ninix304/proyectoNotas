<?php
require_once('../../Conexion.php');
require_once('../models/usuarios.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //obtener los valores enviados por el formulario
    $usuario = $_POST['txtusuario'];
    $contrasena = $_POST['txtcontrasena'];

    //creamos la instancia de la clase usuario

    $use = new Usuario();
    $use->login($usuario, $contrasena);

    //redirigir el controlador de acuerdo al rol
    if ($use->isinicioid()) {
        if ($use->isadmin()) {
            header('location:../../inicio.php');
        } else if ($use->isdocen()) {
            header('location: ../../Materias/pages/index.php');
        }
        exit();
    } else {
        print "<script>alert('Los datos ingresados son incorrectos');
        window.location='../../index.php';</script>";
    }
}

?>