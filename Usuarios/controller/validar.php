<?php

    session_start();
    if(!$_SESSION["validar"]){
        print "<script>alert(\"Esta pagina es solo para usuarios registrados\");
        window.location='../../index.php';</script>";
    }

?>