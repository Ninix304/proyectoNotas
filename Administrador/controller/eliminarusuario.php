<?PHP
require_once('../../Conexion.php');
require_once('../models/administrador.php');

//verificaion del formulario enviado
$ad = new Administrador();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Id = $_POST['Id'];
    $result=$ad->deletead($Id);

    if($result){
        print "<script>alert('Usuario eliminado');
        window.location='../pages/index.php';</script>";
    }else{
        print "<script>alert('El usuario no pudo ser eliminado');
        window.location='../pages/eliminar.php';</script>";
    }
}
?>