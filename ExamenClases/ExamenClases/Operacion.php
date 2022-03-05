<?php

/**
 * Class Operacion
 * Esta clase descompondrá la operación y generará un resultado
 */
abstract class Operacion{

    // Variables protegidas, accesibles desde las subclases
    protected $operando1;
    protected $operando2;
    protected $operacion;
    protected $operador; 
    protected $tipo; 
    protected $resultado;

    private $op1;
    private $op2;
    private $signo;

    // TODO: Declara las variables donde se almacenaran los datos cuando se quiera crear objeto de esta clase
    // ESCRIBE LAS VARIBALES QUE NECESITES

    
    //Getters y Setters

    public function getOp1(){
        return $this->op1;
    }
    public function setOp1($op1){
        $this->op1 = $op1;
    }
    public function getOp2(){
        return $this->op2;
    }
    public function setOp2($op2){
        $this->op2 = $op2;
    }
    public function getSigno(){
        return $this->signo;
    }
    public function setSigno($signo){
        $this->signo = $signo;
    }



    /**
     * Operacion constructor.
     * @param $operacion
     */
    // TODO: Completa el constructor de la clase inicializando las variables necesarias
    public function __construct($operacion){

        $this->operacion =$operacion;

        $this->conseguirDatos($operacion);
        // Despues de esta línea tendremos lo necesario para inicializar el resto de aributos excepto el tipo
        //$this->...;

        $this->comprobarRealRacional($this->operando1,$this->operando2);
        //$this->tipo = ... ;

    }

    /**
     * @param $operacion
     * @return bool
     * Divide la operación para conseguir los datos que permiten crear el objeto
     */
    private function conseguirDatos($operacion){
            //preg_split devuelve en un array los valores cortados por los limitadores. -1 devuelve sin limite length y
            //flag preg_split_delim_capture captura tambien los delimitadores del patron. (: + - *)
            $arrayvalor = preg_split('/([\:|\+|\-|\*])/',$operacion, -1, PREG_SPLIT_DELIM_CAPTURE);

            // TODO: Completa el resto de la función para que sea posible inicializar nuestra variables en el construtor
            // REVISAR la función checkOperation($operación) y añadir lo que necesites teniendo en cuenta que en este caso 
            // debes inicilizar algunos atributos una vez dividida nuestra operación

    }

    /**
     * @param $op1
     * @param $op2
     * Comprueba el tipo de operacion.
     */
    private function comprobarRealRacional($op1, $op2){

        if (strpos($op1,'/') || strpos($op2,'/')){
            $this->type = "racional";
        } else {
            $this->type = "real";
        }
    }

    /**
     * @param $operacion
     * @return bool
     * Comprueba la string introducida que pase los filtros.
     */
    public static function comprobarString($operacion){

        if (self::checkPattern($operacion)){
            if (self::checkOperation($operacion)){
                return true;
            }
        } else {
            return false;
        }
    }

    /**
     * @param $operacion
     * @return int
     * Comprueba que lo introducido solo contiene real o racional, operador, real o racional.
     * Y devuelve 0 o 1
     */
    private function checkPattern($operacion){
        // Pattern que solo permite introducir numeros y operadores.
        $regPattern = '/(^[0-9]+)([\.|\/][0-9]+)?([\+|\-|\*|\:|\/])([0-9]+)([\.|\/][0-9]+)?$/';
        $comprobar = preg_match($regPattern,$operacion);
        return $comprobar;
    }

    /**
     * @param $comprobar
     * @param $operacion
     * @return bool
     * Divide el string en operandos y comprueba si son racional o real
     * y llama a la funcion validateOperation.
     */
    private function checkOperation($operacion){

        $arrayvalor = preg_split('/([\:|\+|\-|\*])/',$operacion, -1, PREG_SPLIT_DELIM_CAPTURE);
        //Una vez partida comprobamos si ha devuelto 1 solo string que significaria que tiene el operador "/"
        if (count($arrayvalor) == 1){
            //comprobamos si tiene mas de "/", si es 1 se dividen si hay más está mal introducido
            if (substr_count($arrayvalor[0],'/') > 1 ){
                return false;
            } else {
                $arrayvalor = preg_split('/[\/]/',$arrayvalor[0]);
                return self::validateOperation($arrayvalor);
            }
        } else {
            return self::validateOperation($arrayvalor);
        }
    }

    /**
     * @param $arrayvalor
     * @return bool
     * Compara los dos operandos para saber si la operación es posible o no.
     */
    private static function validateOperation($arrayvalor){

        if (strpos($arrayvalor[0], '/') && strpos($arrayvalor[2], '.')){
            return false;
        } else if (strpos($arrayvalor[0], '.') && strpos($arrayvalor[2], '/')){
            return false;
        }else{
            return true;
        }

    }

    /**
     * @param $valor
     * @return string
     * Metodo para sacar si es real o racional desde la string dada, sin instanciar nada.
     */
    public static function cogerTipo($valor){

        $arrayTemp = preg_split('/[\-|\+|\*|\:]/',$valor);
        if (count($arrayTemp) != 1){
            return (strpos($arrayTemp[0],'/') or strpos($arrayTemp[1],'/')) ? "racional" : "real";
        } else {
            $arrayTemp = preg_split('/[\/]/',$valor);
            return (strpos($arrayTemp[0],'/') or strpos($arrayTemp[1],'/')) ? "racional" : "real";
        }

    }

    /**
     * @param $resultado
     * Método para mostrar una tabla con el desglose del resultado obtenido.
     */
    // TODO: Completa esta función para que imprima una tabla HTML con los operandos, el operador, el tipo de operación y su resultado
    public function imprimir($resultado){
        //
    }

    // TODO: Implementa los getters y setters que necesites
    //

    public function setResultado($final){
        $this->resultado = $this->getOperacion()."=".$final;
    }

    // TODO: Completa el método __toString para imprimir la operación de la forma "4+5"
    public function __toString() {
        // 
    }
}
?>