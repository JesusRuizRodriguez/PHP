<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
class test{
    private $id;
    protected function __construct($nombre, $dinero){
        $this->nombre = $nombre;
        $this->dinero = $dinero;        
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function __toString(){
        return "id: ".$this->id." nombre: ".$this->nombre." dinero: ".$this->dinero;
    }
}
