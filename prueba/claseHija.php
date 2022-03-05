<?php

include_once './clases.php';

class testHijo extends test{
    
    public function __construct($nombre, $dinero,$idHijo){
        parent::__construct($nombre, $dinero);
        $this->idHijo = $idHijo;
    }

    // public function getIdHijo(){
    //     return $this->idHijo;
    // }

    // public function setIdHijo($idHijo){
    //     $this->idHijo = $idHijo;
    // }

    public function __toString(){
        
        return "nombre: ".$this->nombre." dinero: ".$this->dinero."ID HIJO: ".$this->idHijo;
    }
}