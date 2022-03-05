<?php 
$nombre = 'jesus';

session_start();
$_SESSION['user'] = $nombre;

if(isset($_SESSION['user'])){
    echo $nombre." bienvenido";
}

if(isset($_SESSION['user'])){
    unset($_SESSION['unset']);
    echo "hasta luego ".$nombre;
}
sesion_destroy();

if(!isset($_SESSION['user'])){
    echo "no se de que me hablas";
}