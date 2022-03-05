<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('Vehiculo.php');
include_once('CuatroRuedas.php');
include_once('DosRuedas.php');
include_once('Coche.php');
include_once('Camion.php');

$vehiculo1 = new Vehiculo();

$vehiculo1.circula();












?>