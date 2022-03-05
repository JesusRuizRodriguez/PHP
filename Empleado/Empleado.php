<?php 

 class Empleado{

    public $nombre;
    public $sueldo;

    function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    function __toString(){
        if($this->sueldo > 3000){
            return $this->nombre.", debe pagar impuestos <br>";
        }else{
            return $this->nombre.", no debe pagar impuestos <br>";
        }
        
    }
    



}







?>