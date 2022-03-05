<?php 

class Bicicleta extends Vehiculo{
    
    public $cadenas;

    public function __construct($km, $cadenas){
        parent::__construct($km);
        $this->cadenas = $cadenas;
    }



    public function conducir(){
        echo "La bicicleta esta andando <br>";
    }

    public function caballito(){
        echo "La bicicleta esta haciendo el caballito <br>";
    }


}

?>