<?php

// ini_set('display_errors',1);
// error_reporting(E_ALL);

include_once './clases.php';
include_once './claseHija.php';

// $t1 = new test('nombreTest',1200);
// $t1->setId(1);
echo("<br>");
$t2 = new testHijo('HIJO',12,"SOON");

// echo $t1;
echo $t2;