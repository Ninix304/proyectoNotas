<?php
include_once('../../Conexion.php');
class Estudiantes extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarest($Nombreest, $Apellidoest, $Documentoest, $Correoest, $Materiaest,$Promedioes,$Fechareg){
        $statement = $this->db->prepare("INSERT INTO estudiantes(Nombreestu,Apellidoestu,Documentoestu,Correoestu,Materia,Docente,Promedio,Fecha_registro)VALUES(:Nombreest, :Apellidoest, :Documentoest, :Correoest, :Materiaest, :Docentees,:Promedioes,:Fechareg)");

        $statement->bindParam(":Nombreest", $Nombreest);
        $statement->bindParam(":Apellidoest", $Apellidoest);
        $statement->bindParam(":Documentoest", $Documentoest);
        $statement->bindParam(":Correoest", $Correoest);
        $statement->bindParam(":Materiaest", $Materiaest);
        $statement->bindParam(":Promedioes", $Promedioes);
        $statement->bindParam(":Fechareg", $Fechareg);
    

        if($statement->execute()){
            echo"Estudiante registrado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el registro";
            header('Location: ../Pages/agregar.php');
        }
    }


    public function getdoc(){
        $row =null;
        $statement=$this->db->prepare("SELECT * FROM estudiantes");
        $statement->execute();
        while($result=$statement->fetch()){
            $row[]=$result;
        }
        return $row;

    }
    public function getiddoc($Id){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante=:Id ");
        $statement->bindparam(':Id',$Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $row[]=$result;

        }
        return $row;
    }
    public function updatead($Id,$Nombreest, $Apellidoest, $Documentoest, $Correoest, $Materiaest,$Promedioes,$Fechareg){

        $statement=$this->db->prepare("UPDATE estudiantes SET Nombreestu=:Nombreest, Apellidoestu=:Apellidoest,Documentoestu=:Documentoest, Correoestu=:Correoest, Materia=:Materiaest, Promedio=:Promedioes,Fecha_registro=:Fechareg WHERE id_estudiante=$Id" );

        $statement->bindParam(":Nombreest", $Nombreest);
        $statement->bindParam(":Apellidoest", $Apellidoest);
        $statement->bindParam(":Documentoest", $Documentoest);
        $statement->bindParam(":Correoest", $Correoest);
        $statement->bindParam(":Materiaest", $Materiaest);
        $statement->bindParam(":Promedioes", $Promedioes);
        $statement->bindParam(":Fechareg", $Fechareg);
        if($statement->execute()){
            echo"estudiante actualizado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la actualizacion";
            header('Location: ../Pages/editar.php');
        }

    }
    public function deletead($Id){
        $statement=$this->db->prepare("DELETE * FROM estudiantes WHERE id_estudiante=:Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            echo"estudiante eliminao";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la eliminacion";
            header('Location: ../Pages/eliminar.php');
        }

    }
}
?>