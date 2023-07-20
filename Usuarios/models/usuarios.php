<?php
require_once('../../Conexion.php');
session_start();
class Usuario extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function login($Usuario, $Password){
        //obtener el usuario o la consulta a la bd
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE Usuario = ?");
        $statement->execute([$Usuario]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        //verificar contraseña
        if($user && password_verify($Password,$user['Passwordusu'])){
            //creamos las variables de inicio de sesion
            $_SESSION['user_id'] = $user['id_usuario'];
            $_SESSION['usuario'] = $user['Usuario'];
            $_SESSION['rol'] = $user['Perfil'];
            $_SESSION['validar'] = true;
            $_SESSION['Nombre'] = $user['Nombreusu']." ".$user['Apellidousu'];
        }
    }   
    public function validarSesion(){
        if($_SESSION['usuario']){
            if(!isset($_SESSION['start'])){
                $_SESSION['start'] = time();
            }else if(time()-$_SESSION['start']>60){
                echo "<script> alert('Cierre de sesión por inactividad);
                window.location= '../../index.php'; </script>";
                $_SESSION['validar'] == false;   
            }
            $_SERVER['start'] = time();
        }  
        
    }
    public function cerrarSesion(){
        session_unset();
        session_destroy(); 
    }
    public function isinicioid(){
        return isset($_SESSION['user_id']);
    }
    public function isadmin(){
        return $this->isinicioid() && $_SESSION['rol'] === 'Administrador'; 
    }
    public function isdocen(){
        return $this->isinicioid() && $_SESSION['rol'] === 'Docente';
    }
}



?>