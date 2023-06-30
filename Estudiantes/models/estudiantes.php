<?php
include_once('../../Conexion.php');
class Administrador extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregarestu($Nombreestu, $Apellidoestu, $Documentoestu, $Correoestu, $Materia, $Docente,$Promedio,$Fecha_registro){
        
        //verificar de que no exista un usuario en la bd
        $sql1 = "SELECT * FROM estudiantes WHERE Documentoestu = '$Documentoestu'";
        $resultado = $this->db->query($sql1);
        if($resultado->rowCount() > 0){
            echo "<script>alert('El estudiante ya esta registrado');
            window.location = '../pages/agregar.php';</script>";
        }else{
        
        $statement = $this->db->prepare("INSERT INTO estudiantes(Nombreestu,Apellidoestu,Documentoestu,Correoestu,Materia,Docente,Promedio,Fecha_registro)VALUES(:Nombreestu,:Apellidoestu,:Documentoestu,:Correoestu,:Materia,:Docente, :Promedio, :Fecha_registro)");

        $statement->bindParam(":Nombreestu", $Nombreestu);
        $statement->bindParam(":Apellidoestu", $Apellidoestu);
        $statement->bindParam(":Documentoestu", $Documentoestu);
        $statement->bindParam(":Correoestu", $Correoestu);
        $statement->bindParam(":Materia", $Materia);
        $statement->bindParam(":Docente", $Docente);
        $statement->bindParam(":Promedio", $Promedio);
        $statement->bindParam(":Fecha_registro", $Fecha_registro);

        if($statement->execute()){
            echo"Estudiante registrado";
            header('location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el registro";
            header('location: ../Pages/agregar.php');
        }
    }
    }

    //funcion para seleccionar todos los usuarios con el rol estudiante
    public function getes(){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Estudiante'");
        $statement -> execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }

     //funcion para seleccionar todos los datos de los estudiantes
     public function getestu(){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM estudiantes");
        $statement -> execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }
    //Funcion para seleccionar un estudiante por su id
    public function getidad($Id){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante = :Id");
        $statement -> bindParam(':Id',$Id);
        $statement->execute();
        while($resul = $statement->fetch()){
            $row[]  = $resul;
        }
        return $row;
    }
    //Funcion para actualizar los datos del estudiante
    public function updatead($Id, $Nombreestu, $Apellidoestu, $Documentoestu, $Correoestu, $Materia, $Docente,$Promedio,$Fecha_registro){
        $statement = $this->db->prepare("UPDATE estudiantes SET Nombreestu = :Nombreestu, Apellidoestu = :Apellidoestu, Documentoestu = :Documentoestu, Correoestu = :Correoestu, Materia = :Materia, Docente = :Docente, Promedio = :Promedio, Fecha_registro = :Fecha_registro WHERE id_estudiante = :Id");
        $statement -> bindParam(':Id',$Id);
        $statement->bindParam(":Nombreestu", $Nombreestu);
        $statement->bindParam(":Apellidoestu", $Apellidoestu);
        $statement->bindParam(":Documentoestu", $Documentoestu);
        $statement->bindParam(":Correoestu", $Correoestu);
        $statement->bindParam(":Materia", $Materia);
        $statement->bindParam(":Docente", $Docente);
        $statement->bindParam(":Promedio", $Promedio);
        $statement->bindParam(":Fecha_registro", $Fecha_registro);
        if($statement->execute()){
            header('Location: ../pages/index.php');
        }else{
            header('Location: ../pages/editar.php');
        }
    }
    //Funcion para eliminar un estudiante
    public function deletead($Id){
        $statement = $this->db->prepare("DELETE FROM estudiantes WHERE id_estudiante = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            echo "Estudiante eliminado";
            header('Location: ../pages/index.php');
        }else{
            echo "El estudiante no se pudo eliminar";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>