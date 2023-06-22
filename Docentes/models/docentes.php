<?php
include_once('../../Conexion.php');
class Docentes extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function agregardo($Nombredo, $Apellidodo, $Documentodo, $Correodo, $Materiado,$Usuariodo,$Passworddo,$Perfildo,$Estadodo){
        $statement = $this->db->prepare("INSERT INTO docente(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc,Passworddoc,Perfil,Estadodoc)VALUES(:Nombredo,:Apellidodo,:Documentodo,:Correodo,:Materiado,:Usuariodo,:Passworddo,:Perfildo,:Estadodo)");

        $statement->bindParam(":Nombredo", $Nombredo);
        $statement->bindParam(":Apellidodo", $Apellidodo);
        $statement->bindParam(":Documentodo", $Documentodo);
        $statement->bindParam(":Correodo", $Correodo);
        $statement->bindParam(":Materiado", $Materiado);
        $statement->bindParam(":Usuariodo", $Usuariodo);
        $statement->bindParam(":Passworddo", $Passworddo);
        $statement->bindParam(":Perfildo", $Perfildo);
        $statement->bindParam(":Estadodo", $Estadodo);

        if($statement->execute()){
            echo"Docente registrado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el docente";
            header('Location: ../Pages/agregar.php');
        }
    }


    public function getdoc(){
        $row =null;
        $statement=$this->db->prepare("SELECT * FROM docente");
        $statement->execute();
        while($result=$statement->fetch()){
            $row[]=$result;
        }
        return $row;

    }
    public function getiddoc($Id){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM docentes WHERE id_docente=:Id ");
        $statement->bindparam(':Id',$Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $row[]=$result;

        }
        return $row;
    }
    public function updatead($Id,$Nombredo, $Apellidodo, $Documentodo, $Correodo, $Materiado,$Usuariodo,$Passworddo,$Perfildo,$Estadodo){

        $statement=$this->db->prepare("UPDATE docente SET Nombredoc=:Nombredo, Apellidodoc=:Apellidodo,Documentodoc=:Documentodo, Correodoc=:Correodo, Materiadoc=:Materiado, Usuariodoc=:Usuariodo,Passworddoc=:Passworddo,Perfil=:Perfildo,Estadodoc=:Estadodo WHERE id_usuario=$Id" );

        $statement->bindParam(":Nombredo", $Nombredo);
        $statement->bindParam(":Apellidodo", $Apellidodo);
        $statement->bindParam(":Documentodo", $Documentodo);
        $statement->bindParam(":Correodo", $Correodo);
        $statement->bindParam(":Materiado", $Materiado);
  
        $statement->bindParam(":Usuariodo", $Usuariodo);
        $statement->bindParam(":Passworddo", $Passworddo);
        $statement->bindParam(":Perfildo", $Perfildo);
        $statement->bindParam(":Estadodo", $Estadodo);
        if($statement->execute()){
            echo"docente actualizado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la actualizacion";
            header('Location: ../Pages/editar.php');
        }

    }
    public function deletead($Id){
        $statement=$this->db->prepare("DELETE * FROM docente WHERE id_docente=:Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            echo"docente eliminao";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la eliminacion";
            header('Location: ../Pages/eliminar.php');
        }

    }
}
?>