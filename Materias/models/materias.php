<?php
include_once('../../Conexion.php');
class Materia extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarmate($Nombremate){

        //verificar de que no exista una materia en la bd
        $sql1 = "SELECT * FROM materias WHERE Nombremate = '$Nombremate'";
        $resultado = $this->db->query($sql1);
        if($resultado->rowCount() > 0){
            echo "<script>alert('La materia ya esta registrado');
            window.location = '../pages/agregar.php';</script>";
        }else{

        $statement = $this->db->prepare("INSERT INTO materias(Nombremate)VALUES(:Nombremate)");

        $statement->bindParam(":Nombremate", $Nombremate);

        if($statement->execute()){
            print "<script>alert('Materia registrada');
        window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('No se pudo realizar el registro');
        window.location='../pages/agregar.php';</script>";
        }
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
        $statement=$this->db->prepare("SELECT * FROM materias WHERE  id_materia=:Id");
        $statement->bindparam(':Id',$Id);
        $statement->execute();
        $resultado =$statement->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    //Funcion para actualizar los datos del usuario
    public function updatemate($Id, $Nombremate){
        $statement=$this->db->prepare("UPDATE materias SET id_materia=:Id, Nombremate=:Nombremate WHERE id_materia=$Id" );
        $statement->bindparam(":Id",$Id);
        $statement->bindParam(":Nombremate", $Nombremate);
        if($statement->execute()){
            print "<script>alert('Materia actualizada');
        window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('No se pudo actualizar');
        window.location='../pages/editar.php';</script>";
        }
    }
    //Funcion para eliminar un usuario
    public function deletemate($Id){
        $statement = $this->db->prepare("DELETE FROM materias WHERE id_materia = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            print "<script>alert('Materia eliminada');
        window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('No se pudo eliminar');
        window.location='../pages/eliminar.php';</script>";
        }
    }
}
?>