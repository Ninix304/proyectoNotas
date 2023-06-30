<?php
include_once('../../Conexion.php');

class Estudiantes extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarest($Nombreest, $Apellidoest, $Documentoest, $Correoest, $Materiaest,$Docenteest,$Promedioes,$Fechareg){
        $statement = $this->db->prepare("INSERT INTO estudiantes(Nombreestu,Apellidoestu,Documentoestu,Correoestu,Materia,Docente,Promedio,Fecha_registro)VALUES(:Nombreest,:Apellidoest,:Documentoest,:Correoest,:Materiaest,:Docenteest,:Promedioes,:Fechareg)");

        $statement->bindParam(":Nombreest", $Nombreest);
        $statement->bindParam(":Apellidoest", $Apellidoest);
        $statement->bindParam(":Documentoest", $Documentoest);
        $statement->bindParam(":Correoest", $Correoest);
        $statement->bindParam(":Materiaest", $Materiaest);
        $statement->bindParam(":Docenteest", $Docenteest);
        $statement->bindParam(":Promedioes", $Promedioes);
        $statement->bindParam(":Fechareg", $Fechareg);
    

        if($statement->execute()){
            print "<script>alert('Estudiantes registrado.');
            window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('No se pudo realizar el registro.');
            window.location='../pages/agregar.php';</script>";
        }
    }


    public function getest(){
        $row =null;
        $statement=$this->db->prepare("SELECT * FROM estudiantes");
        $statement->execute();
        while($result=$statement->fetch()){
            $row[]=$result;
        }
        return $row;

    }
    public function getidest($Id){
        $statement=$this->db->prepare("SELECT * FROM estudiantes WHERE  id_estudiante=:Id");
        $statement->bindparam(':Id',$Id);
        $statement->execute();
        $resultado =$statement->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function updateest($Id,$Nombreest, $Apellidoest, $Documentoest, $Correoest, $Materiaest,$Docenteest,$Promedioes,$Fechareg){

        $statement=$this->db->prepare("UPDATE estudiantes SET id_estudiante=:Id, Nombreestu=:Nombreest, Apellidoestu=:Apellidoest,Documentoestu=:Documentoest, Correoestu=:Correoest, Materia=:Materiaest, Docente=:Docenteest, Promedio=:Promedioes,Fecha_registro=:Fechareg WHERE id_estudiante=$Id" );

        $statement->bindParam(":Id", $Id);
        $statement->bindParam(":Nombreest", $Nombreest);
        $statement->bindParam(":Apellidoest", $Apellidoest);
        $statement->bindParam(":Documentoest", $Documentoest);
        $statement->bindParam(":Correoest", $Correoest);
        $statement->bindParam(":Materiaest", $Materiaest);
        $statement->bindParam(":Docenteest", $Docenteest);
        $statement->bindParam(":Promedioes", $Promedioes);
        $statement->bindParam(":Fechareg", $Fechareg);
        if($statement->execute()){
            print "<script>alert('Estudiante actualizado');
            window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('No se pudo realizar la actualización.');
            window.location='../pages/editar.php';</script>";
        }

    }
    public function deleteest($Id){
        $statement=$this->db->prepare("DELETE FROM estudiantes WHERE id_estudiante=:Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            print "<script>alert('Estudiante eliminado');
            window.location='../pages/index.php';</script>";
        }else{
            print "<script>alert('Estudiante no eliminado');
            window.location='../pages/eliminar.php';</script>";
        }

>>>>>>> camilos
    }
}
?>