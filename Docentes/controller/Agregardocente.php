<?php
require_once('../../Conexion.php');
require_once('../models/docentes.php');

if($_POST){
    $docente=new Docentes();
    $nombredoc=$_POST['txtnombredoc'];
    $apellidodoc=$_POST['txtapellidodoc'];
    $documentodoc=$_POST['txtdocumentodoc'];
    $correodoc=$_POST['txtcorreodoc'];
    $materiadoc=$_POST['txtmateriadoc'];
    $usuariodoc=$_POST['txtusuariodoc'];
    $passworddoc=$_POST['txtcontrasenadoc'];
    $perfil=$_POST['txtperfildoc'];
    $estadousu=$_POST['txtestadodoc'];
    $docente->agregardo($nombredoc,$apellidodoc,$documentodoc,$correodoc,$materiadoc,$usuariodoc,$passworddoc,$perfil,$estadousu);
}
?>