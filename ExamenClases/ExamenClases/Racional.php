<?php
class Racional extends OperacionRacional {

    private $num;
    private $den;

    /**
     * Racional constructor.
     * @param $num
     * @param $den
     * Si el denominador esta vacio, dependiendo del valor de num dara un valor u otro.
     */
    // TODO: Implementa el constructor 
    public function __construct($num, $den){
        if($this->den == null){
            $this->den = 1;
        }
        if($this->num == null){
            $this->num = 1;
        }



    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la suma de dos fracciones
     */
    // TODO: Completa el método
    public function suma (Racional $b) {
        // Si ambos denominadores son iguales
        
        if ($this->getDen() == $b->getDen()){

            $total = $this->getNum() + $b->getNum();
            $resultado = new Racional($total, $this->getDen());
            
        } else{
            
            $comun = $this->getDen() * $b->getDen(); 
            $num1 = $this->getNum()*$comun;
            $num2 = $b->getNum()*$comun;   
            $total = $num1 + $num2;
            $resultado = new Racional($total,$comun);         
        }
        
        return $resultado->getNum()."/".$resultado->getDen();

    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la resta de dos fracciones
     */
    // TODO: Implementa el método
    public function resta (Racional $b){
        //
        
        if ($this->getDen() == $b->getDen()){
            $total = $this->getNum() - $b->getNum();
            $resultado = new Racional($total, $this->getDen());
        } else{
            //
            $comun = $this->getDen() * $b->getDen(); 
            $num1 = $this->getNum()*$comun;
            $num2 = $b->getNum()*$comun;   
            $total = $num1 - $num2;
            $resultado = new Racional($total,$comun);         
        }

        return $resultado->getNum()."/".$resultado->getDen();


    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la multiplicacion de dos fracciones
     */
    // TODO: Implementa el método
    public function multiplicar (Racional $b){
        //

        $numerador = $this->getNum()*$b->getNum();
        $denominador = $this->getDen()*$b->getDen();
        $resultado = new Racional($numerador,$denominador);

        return $resultado->getNum()."/".$resultado->getDen();
        
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la division de dos fracciones
     */
    // TODO: Implementa el método
    public function dividir (Racional $b){
        //
                
        $numerador = $this->getNum()/$b->getNum();
        $denominador = $this->getDen()/$b->getDen();
        $resultado = new Racional($numerador,$denominador);
        return $resultado->getNum()."/".$resultado->getDen();
        
    }

    /**
     * @return mixed
     * Getters y Setters
     */

    public function getNum(){
        return $this->num;
    }

    public function getDen(){
        return $this->den;
    }

}
?>