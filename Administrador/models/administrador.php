<?php
include_once('../../Conexion.php');
class Administrador extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarad($Nombread, $Apellidoad, $Usuarioad, $Passwordad, $Perfilad, $Estadoad){
        $statement = $this->db->prepare("INSERT INTO Usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)VALUES(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

        $statement->bindParam(":Nombread", $Nombread);
        $statement->bindParam(":Apellidoad", $Apellidoad);
        $statement->bindParam(":Usuarioad", $Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Perfilad", $Perfilad);
        $statement->bindParam(":Estadoad", $Estadoad);

        if($statement->execute()){
            echo"Usuario registrado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el registro";
            header('Location: ../Pages/agregar.php');
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
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador' AND id_usuario=:Id");
        $statement->bindparam(':Id',$Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $row[]=$result;

        }
        return $row;
    }
    public function updatead($Id,$Nombread, $Apellidoad, $Usuarioad, $Passwordad,$Estadoad){

        $statement=$this->db->prepare("UPDATE usuarios SET Nombreusu=:Nombread, Apellidousu=:Apellidoad,Usuario=:Usuarioad, Passwordusu=:Passwordad, Estado=:Estadoad WHERE id_usuario=$Id" );
        $statement->bindParam(":Nombread", $Nombread);
        $statement->bindParam(":Apellidoad", $Apellidoad);
        $statement->bindParam(":Usuarioad", $Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Estadoad", $Estadoad);
        if($statement->execute()){
            echo"Usuario actualizado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la actualizacion";
            header('Location: ../Pages/editar.php');
        }

    }
    public function deletead($Id){
        $statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=:Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            echo"Usuario eliminao";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la eliminacion";
            header('Location: ../Pages/eliminar.php');
        }

    }
}
?>