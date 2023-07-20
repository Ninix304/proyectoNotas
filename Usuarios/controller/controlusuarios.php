<?php
if($_POST["txtusuario"]=="Nixon Cañon" && $_POST["txtcontrasena"]=="123456"){
    //crear la sesión
    session_start();

    //Definir variables de sesión
    $_SESSION["usuario"]=$_POST["txtusuario"];
    $_SESSION["validar"]=true;
    $_SESSION["start"]=time();
    $_SESSION["expire"] = $_SESSION["start"] + (1*60);
    header("location: ../../inicio.php");
}else{
    print "<script>alert(\"Los datos que ingreso no son correctos\");window.location='../../index.php';</script>";
}



?>