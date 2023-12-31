<?php
class Conexion{
    protected $db;
    private $drive = "mysql";
    private $host = "localhost";
    private $dbname = "notas2023";
    private $user = "root";
    private $password = "";


    //Constructor que realizara la conexion
    public function __construct(){
        try{
            $db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user, $this->password);

            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
            echo "Conexion realizada";

        }catch(PDOException $e){
            echo "Ha surgido algun error: Detalle: ".$e->getMessage();
        }
    }



}


?>