<?php 

 class Factura{
    public const IVA=0.21;
    public $importeBase;
    public $fecha;
    public $impuestos;
    public $importeBruto;
    public $estado;

    function imprime(){
        return "imprimiendo...";
    }

}




?>