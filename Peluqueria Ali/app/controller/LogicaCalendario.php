<?php 

//en caso de que exista una sesion se enviara al calendario, sino al login para iniciarla
session_start();

if(isset($_SESSION['correo'])){
    header("Location:./Calendario.php");
}else{
    header("Location:./login.php");
}