<?php 
ini_set('display_errors', '1');
error_reporting(E_ALL);
include 'DadoPoker.php';


$dado1 = new DadoPoker();
$dado2 = new DadoPoker();
$dado3 = new DadoPoker();
$dado4 = new DadoPoker();
$dado5 = new DadoPoker();

$numero = $dado1 -> tira();
$dado1 -> nombreFigura($numero);
$numero = $dado2 -> tira();
$dado2 -> nombreFigura($numero);
$numero = $dado3 -> tira();
$dado3-> nombreFigura($numero);
$numero = $dado4 -> tira();
$dado4 -> nombreFigura($numero);
$numero = $dado5 -> tira();
$dado5 -> nombreFigura($numero);

$tiradasTotales = $dado1 -> getTiradasTotales();
echo "<br> Las tiradas totales son: ".$tiradasTotales;
?>