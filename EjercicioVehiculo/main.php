<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'Vehiculo.php';
include 'Bicicleta.php';
include 'Coche.php';

$b1 = new Bicicleta(1900,3);
$c1 = new Coche(300,800);

$b1 -> conducir();
$b1 -> caballito();
$c1 -> conducir();
$c1 -> quemarRueda();

$kmRb= $b1 -> getKmRecorridos();
$kmRc = $c1 -> getKmRecorridos();
$kmTotal = $b1->getKmTotales();
$nVehiculos = $b1->getVehiculosCreados();

echo ("<br> Km recorridos en bici: ".$kmRb);
echo ("<br> Km recorridos en coche: ".$kmRc);
echo ("<br> Km totales recorridos: ".$kmTotal);
echo ("<br>Se han creado ".$nVehiculos);


?>