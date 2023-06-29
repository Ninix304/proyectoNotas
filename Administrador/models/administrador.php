<?php
include_once('../../Conexion.php');
class Administrador extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarad($Nombread, $Apellidoad, $Usuarioad, $Passwordad, $Perfilad, $Estadoad){
        $sql1= "SELECT * FROM Usuarios WHERE Usuario = '$Usuarioad'";
        $resultado=$this->db->query($sql1);
        if($resultado->rowCount() >0){
            echo "<script>
            alert('El usuario ya está registrado');
            window.location= '../pages/agregar.php';
            </script>";
        }
        else{
        
        $statement = $this->db->prepare("INSERT INTO Usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)VALUES(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

        $statement->bindParam(":Nombread", $Nombread);
        $statement->bindParam(":Apellidoad", $Apellidoad);
        $statement->bindParam(":Usuarioad", $Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Perfilad", $Perfilad);
        $statement->bindParam(":Estadoad", $Estadoad);

        if($statement->execute()){
            print "<script>alert('Usuario registrado');
        window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('No se pudo registrar');
        window.location='../pages/agregar.php';</script>";
        }
    }
    }


    public function getad(){
        $row =null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'");
        $statement->execute();
        while($result=$statement->fetch()){
            $row[]=$result;
        }
        return $row;

    }
    public function getidad($Id){
        
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE  id_usuario=:Id");
        $statement->bindparam(':Id',$Id);
        $statement->execute();
        $resultado =$statement->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function updatead($Id,$Nombread, $Apellidoad, $Usuarioad, $Passwordad,$perfil,$Estadoad){

        $statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id, Nombreusu=:Nombread, Apellidousu=:Apellidoad,Usuario=:Usuarioad, Passwordusu=:Passwordad,Perfil=:Perfil, Estado=:Estadoad WHERE id_usuario=$Id" );
        $statement->bindparam(":Id",$Id);
        $statement->bindParam(":Nombread", $Nombread);
        $statement->bindParam(":Apellidoad", $Apellidoad);
        $statement->bindParam(":Usuarioad", $Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Perfil", $perfil);
        $statement->bindParam(":Estadoad", $Estadoad);
        if($statement->execute()){
            print "<script>alert('Usuario actualizado');
        window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('El usuario no se pudo actualizar');
        window.location='../pages/editar.php';</script>";
        }

    }
    public function deletead($Id){
        $statement=$this->db->prepare("DELETE FROM usuarios WHERE id_usuario=:Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            print "<script>alert('Usuario eliminado');
        window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('El usuario no pudo ser eliminado');
        window.location='../pages/eliminar.php';</script>";
        }

    }
}
?>