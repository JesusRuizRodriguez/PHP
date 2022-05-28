<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("conexion.inc.php");

class Cliente extends Usuario{

    private $n_tarjeta;
    

    function __construct($correo, $nombre, $pass, $repetirpass, $tlf,$admin=0,$n_tarjeta) {
        parent::__construct($correo, $nombre, $pass, $repetirpass, $tlf,$admin=0,);
        $this->n_tarjeta=$n_tarjeta;
    }
    

    
    
}
