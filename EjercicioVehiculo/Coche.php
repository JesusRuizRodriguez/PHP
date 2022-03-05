<?php 

class Coche extends Vehiculo{

    public $cilindrada;

    public function __construct($km, $cilindrada){
        parent::__construct($km);
        $this->cilindrada = $cilindrada;
    }
    
    public function conducir(){
        echo "El coche anda <br>";
    }

    public function quemarRueda(){
        echo "El coche esta quemando rueda <br>";
    }

}



?>