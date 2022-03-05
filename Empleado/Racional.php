<?php 

 class Racional{
    public $numero;
    

    function __construct(){
        $this->numero = "";
        
    }

    function __toString(){
        return $this->numero."<br>";
        
        
    }
}




?>