<?php 

class Vehiculo{
    public static $exist = 0;
    public static $kmTotal;
    protected $km;

    public function __construct($km){
        $this->km = $km;
        self::$exist++;
        self::$kmTotal +=$this->km;
    }
    
    public function conducir(){
        echo "El vehiculo esta andando";
    }
    public function getVehiculosCreados(){
        return self::$exist;

    }

    public function getKmTotales(){
        return self::$kmTotal;
    }

    public function getKmRecorridos(){
        return $this->km;
    }
}



?>