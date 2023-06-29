<?PHP
require_once('../../Conexion.php');
require_once('../models/materias.php');

//verificaion del formulario enviado
$ad = new Materia();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Id = $_POST['Id'];
    $result=$ad->deletemate($Id);

    if($result){
        print "<script>alert('Materia eliminada');
        window.location='../pages/index.php';</script>";
    }else{
        print "<script>alert('No se pudo eliminar');
        window.location='../pages/eliminar.php';</script>";
    }
}
?>