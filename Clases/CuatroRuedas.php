<?php

class CuatroRuedas extends Vehiculo{

    var $numPuertas;

    function __construct($color, $peso, $numPuertas){
        parent($color,$peso);
        $this -> $numPuertas;
    }
    function repintar($color){
        
    }



} 

?>