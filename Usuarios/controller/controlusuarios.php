<?php
if($_POST["txtusuario"]=="Juan Padua" && $_POST["txtcontrasena"]=="123456"){
    //crear la sesion

    session_start();

    //definir variables de la sesion

    $_SESSION["usuario"]=$_POST["txtusuario"];
    $_SESSION["validar"]=true;
    $_SESSION["start"]=time();
    $_SESSION["expire"]= $_SESSION["start"] + (1*120);

    header("location:../../inicio.php");

}else{
    print "<script>alert(\"verificar los datos de ingreso\");
    window.location='../../index.php';</script>";
}

