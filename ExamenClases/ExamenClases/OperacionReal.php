<?php

/**
 * Class OperacionReal
 * Realiza una operación real
 */
class OperacionReal extends Operacion{

    /**
     * OperacionReal constructor.
     * @param $operacion
     * Constructor hererado de la clase padre Operacion
     */
    public function __construct($operacion) {
        parent::__construct($operacion);
    }

    /**
     * @param $op1
     * @param $op2
     * @param $operador
     * Metodo para resolver las operaciones requeridas 
     * con números reales (+,-,*,/) y devolver el resultado
     */
    /* TODO: Implementa esta función para que con los parámetros recibidos, 
    sea capaz de resolver las operaciones requeridas con números reales (+, -, *, /) 
     y devolver el resultado obtenido */
    public function operacionReal($op1, $op2, $operador){
        $resultado;

        if($operador == "+"){
            $resultado = $op1 + $op2;
        }elseif($operador == "-"){
            $resultado = $op1 - $op2;
        }elseif($operador == "/"){
            $resultado = $op1 / $op2;
        }else{
            $resultado = $op1 * $op2;
           
        }

        return $resultado;
    }

}
?>