<?php

 class Vehiculo{
    var $color;
    var $peso;

    function __construct($color, $peso){
        $this -> $color;
        $this -> $peso;
    }


    function circula(){
        echo "El vehiculo circula";
    }

    function añadirPersona($pesoPersona){
        $this -> peso = $pesoPersona;
        echo $this ->peso;
    }

    
}







?>