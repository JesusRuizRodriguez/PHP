<?php

/**
 * Class OperacionRacional
 * Realiza una operación racional
 */
class OperacionRacional extends Operacion{

    public function __construct($operacion){
        parent::__construct($operacion);

    }

    /**
     * @param $fraccion
     * @return string
     * Simplifica la fraccion pasada por parametro, utilizando el mcd
     */
    // TODO: Completa el método
    public function simplifica($fraccion){

        // 1. - Separamos los operandos de una fracción
        $operandos = preg_split('/\//',$fraccion);
        $op1 = $operandos[0];
        $op2 = $operandos[1];
        $nMenor;
        $nFraccion;
        $resultado;

        //nos quedamos con el numero menor de los 2
        if($op1 < $op2){
            $nMenor = $op1;
        }else{
            $nMenor = $op2;
        }

        // 2. - Calculamos el mc
        //Buscaremos el divisor comun de las 2 cifras partiendo desde la más pequeña -1 para que no la inlcuya 
        for($i=$nMenor-1;$i>0;$i--){
            if($op1%$i == 0 && $op2%i ==0){
                $nFraccion = $i;        
            }
        }

        // 3. - Realizamos la simplificación
        //dividimos los operadores por el mcm
        $op1 /= $nFraccion;
        $op2 /= $nFraccion;
        
        // 4. - Devolvemos el resultado
        //guardamos el resultado y hacemos return
        $resultado = $op1."/".$op2;
        return $resultado;
        
    }

    /**
     * @param OperacionRacional $objeto
     * @return string
     * Separa los operandos para crear con ellos 2 objetos fraccion Racional
     * Y se encarga de llamar a la funcion necesaria para sumar,restar,etc.
     */
    // TODO: Implementa el método
    public function operacionRacional(OperacionRacional $objeto){
        $operando1; 
        $operando2;
        $signo;
        $resultado;

        $operando1 = $objeto->getOp1();
        $operando2 = $objeto->getOp2();
        $signo = $objeto->getSigno();

        $racional1 = new Racional($operando1);
        $racional2 = new Racional($operando2);

        if($signo == "+"){
            $resultado = $racional1 -> suma($racional2);
        }elseif($signo == "-"){
            $resultado = $racional1 -> resta($racional2);
        }elseif($signo == ":"){
            $resultado = $racional1 -> dividir($racional2);
        }else{
             $resultado = $racional1 -> multiplicar($racional2);
        }

        return $resultado;

        // 1. - Separa los operandos de la operación entre fracciones

        // 2. - Crea los dos racionales con los operandos obtenidos

        // 3. - Comprueba el operador, realiza el calculo que corresponda y devuelve el resultado

        // PISTA:
        // - Tanto al separar operandos como al obtener el operador, 
        //   es muy importante el uso de getters.


    }
}
?>