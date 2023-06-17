<?php
include_once('../../Conexion.php');
class Administrador extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarad($Nombread, $Apellidoad, $Usuarioad, $Passwordad, $Perfilad, $Estadoad){
        $statement = $this->db->prepare("INSERT INTO Usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)VALUES(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:'Administrador',:'Activo')");

        $statement->bindParam(":Nombread", $Nombread);
        $statement->bindParam(":Apellidoad", $Apellidoad);
        $statement->bindParam(":Usuarioad", $Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Perfilad", $Perfilad);
        $statement->bindParam(":Estadoad", $Estadoad);

        if($statement->execute()){
            echo"Usuario registrado";
            header('location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el registro";
            header('location: ../Pages/agregar.php');
        }
    }

    //funcion para seleccionar todos los usuarios con el rol administrador
    public function getad(){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
        $statement -> execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }
    //Funcion para seleccionar un usuario por su id
    public function getidad($Id){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE  Perfil = 'Administrador' AND id_usuario = :Id");
        $statement -> bindParam(':Id',$Id);
        $statement->execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }
    //Funcion para actualizar los datos del usuario
    public function updatead($Id, $Nombread, $Apellidoad, $Usuarioad, $Passwordad, $Estadoad){
        $statement = $this->db->prepare("UPDATE usuarios SET Nombreusu = :Nombread, Apellidousu = :Apellidoad, usuario = :Usuarioad, Passwordusu = :Passwordad, Estado = :Estadoad WHERE id_usuario = :Id");
        $statement -> bindParam(':Id',$Id);
        $statement -> bindParam(':Nombread',$Nombread);
        $statement -> bindParam(':Apellidoad',$Apellidoad);
        $statement -> bindParam(':Usuarioad',$Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Estadoad", $Estadoad);
        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //Funcion para eliminar un usuario
    public function deletead($Id){
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usurio = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            echo "Usuario eliminado";
            header('Location: ../pages/index.php');
        }else{
            echo "El usuario no se pudo eliminar";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>