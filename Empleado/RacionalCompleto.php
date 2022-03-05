<?php 

class RacionalCompleto{
    public $num;
    public $den;

    function __construct($num,$den){
        $this->num = $num;
        $this->den = $den;
        
        if(is_string($this->num)){
            $aux = explode("/", $this->$num);
            $this->num = $aux[0];
            $this->den = $aux[1];
            
        }elseif($this->den == null){
            $this->den = 1;
        }elseif($this->num == null){
            $this->num = 1;
        }else{
            $this->num = $num;
            $this->den = $den;
        }

    }

    function __toString(){
        return $this->num."/".$this->den."<br>";
        }
        
    }




?>