<?php 

class DadoPoker{
    public static $nTirada=0;
    
    public function tira(){
        $numeroRandom = rand(0,5);
        self::$nTirada++;
        return $numeroRandom;
    }

    public function nombreFigura($n){
        $tirada;
        $array = [0=>'As',1=>'K',2=>'Q' ,3=>'J', 4=> '7', 5=>'8'];

        if($n == 0){
            $tirada = $array[0];
            echo $array[0];
        }elseif($n ==1){
            $tirada = $array[1];
            echo $array[1];
        }elseif($n ==2){
            $tirada = $array[2];
            echo $array[2];
        }elseif($n == 3){
            $tirada = $array[3];
            echo $array[3];
        }elseif($n ==4){
            $tirada = $array[4];
            echo $array[4];
        }elseif($n==5){
            $tirada = $array[5];
            echo $array[5];
        }

        return $tirada;
    }

    public function getTiradasTotales(){
        
        return self::$nTirada;
    }

}




?>