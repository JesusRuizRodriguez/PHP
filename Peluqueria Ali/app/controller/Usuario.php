<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("conexion.inc.php");

class Usuario extends Conexion{

    private $correo;
    private $nombre;
    private $pass;
    private $repetirpass;
    private $tlf;
    private $admin;
    

     function __construct($correo, $nombre, $pass, $repetirpass, $tlf,$admin =0) {
        $this->correo = $correo;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->repetirpass = $repetirpass;
        $this->tlf = $tlf;
        $this->admin = $admin;

    }
    
    public static function preRegistro($conexion, $nombre, $correo, $tlf, $pass, $repetirpass){
        $existeCorreo = $conexion->query("SELECT * FROM Usuario WHERE correo='$correo'");
                $existeTelefono = $conexion->query("SELECT * FROM Usuario WHERE telefono='$tlf'");
                
                if($pass !== $repetirpass){
                    echo"Las contraseñas no coinciden, intentelo de nuevo";

                }else if ($registroCorreo = $existeCorreo->fetch()) {
                    echo "Este correo ya esta en uso";
                    
                }else if($registroTelefono = $existeTelefono->fetch()){
                    echo "Este telefono ya esta en uso";

                } else {
                    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                    Usuario::registro($conexion,$nombre, $correo, $tlf, $pass_hash);
                }
    }

    public static function registro($conexion,$nombre, $correo, $tlf, $pass){
            $admin = 0;
            try {
                $insertar = $conexion->exec("INSERT INTO Usuario (nombre,correo,pass,telefono,administrador) VALUES ('$nombre', '$correo', '$pass', '$tlf','$admin')");
                echo "Registro completo";
                header("Location: ./login.php");
                
                
            } catch (PDOException $err) {
                echo "Error insertando el usuario: " . $err->getMessage();
            }
        
        
    }

    public static function login($conexion, $correo, $pass){

        //consulta para obtener los datos del usuario
        $existe = $conexion->query("SELECT nombre,correo,pass FROM Usuario WHERE correo='$correo'");
        //fetch para acceder a la informacion de la consulta
        $comprobacion=$existe->fetch();
        
        //si no coinciden las pass se muestra un aviso sino se crean sesiones
                           
        if(!$comprobacion){
            echo "Esta cuenta no existe";
        }else if(!password_verify($pass,$comprobacion['pass'])){
            echo "Contraseña incorrecta, intentelo de nuevo";
            
        }else{
            $user = $comprobacion['nombre'];
            //inicios de las sesiones
            session_start();
            $_SESSION['nombre'] = $user;
            $_SESSION['correo'] = $correo;
            $_SESSION['pass'] = $pass;
            echo "Sesion iniciada"; 
            header("Location: ./Calendario.php");           
        }       

    }

    public static function cerrarSesion(){
        
        //se cierra la sesion nombre
        if(isset($_SESSION['nombre'])){
            unset($_SESSION['nombre']);
        }
        //se cierra la sesion correo
        if(isset($_SESSION['correo'])){
            unset($_SESSION['correo']);
        }
        //se cierra la sesion pass
        if(isset($_SESSION['pass'])){
            unset($_SESSION['pass']);
        }
        //destruccion de la sesiones
        session_destroy();   

    }

    
}
