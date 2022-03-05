<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'Racional.php';
include 'Empleado.php';
include 'Factura.php';
include 'RacionalCompleto.php';


$a = new RacionalCompleto("8/5");
$b = new RacionalCompleto(5,4);
$c = new RacionalCompleto(5);
$d = new RacionalCompleto();



$empleado = new Empleado("Jose", 3001);
$factura = new Factura();
echo ($a);
echo ($b);
echo ($c);
echo ($d);

echo ("<br>".$empleado);
echo ($factura->imprime());







?>