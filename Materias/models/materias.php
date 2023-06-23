<?php
include_once('../../Conexion.php');
class Materia extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarmate($Nombremate){
        $statement = $this->db->prepare("INSERT INTO materias(Nombremate)VALUES(:Nombremate)");

        $statement->bindParam(":Nombremate", $Nombremate);

        if($statement->execute()){
            echo"Materia registrada";
            header('location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el registro";
            header('location: ../Pages/agregar.php');
        }
    }

    //funcion para seleccionar todos los datos de las materias
   public function getmate(){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement -> execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }
    //Funcion para seleccionar un usuario por su id
    public function getidmate($Id){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM materias WHERE id_materia = :Id");
        $statement -> bindParam(':Id',$Id);
        $statement->execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }
    //Funcion para actualizar los datos del usuario
    public function updatemate($Id, $Nombremate){
        $statement = $this->db->prepare("UPDATE materias SET Nombremate = :Nombremate WHERE id_materia = :Id");
        $statement -> bindParam(':Id',$Id);
        $statement -> bindParam(':Nombremate',$Nombremate);
        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //Funcion para eliminar un usuario
    public function deletemate($Id){
        $statement = $this->db->prepare("DELETE FROM materias WHERE id_materia = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            echo "Materia eliminada";
            header('Location: ../pages/index.php');
        }else{
            echo "La materia no se pudo eliminar";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>