<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

    //funcion para obtener el dia en español y poder mostrarlo en la página
    function mesSpain(){

        // mes del año
        $fActual = date("m");

        switch($fActual){
            case "01":
                $mes = "enero";
                break;
            case "02":
                $mes = "febrero";
                break;
            case "03":
                $mes = "marzo";
                break;  
            case "04":
                $mes = "abril";
                break;
            case "05":
                $mes = "mayo";
                break;
            case "06":
                $mes = "junio"; 
                break;
            case "07":
                $mes = "julio"; 
                break;
            case "08":
                $mes = "agosto";
                break;
            case "09":
                $mes = "septiembre";
                break;
            case "10":
                $mes = "octubre";
                break;
            case "11":
                $mes = "noviembre";
                break;
            case "12":
                $mes = "diciembre";    
                break;                 
                
        }

        return $mes;

    }

    // mostrar los dias correspondientes segun el mes actual
    function mostrarDias(){
        // mes del año
        $fActual = date("m");
        // si es bisiesto o no
        $fBi = date("L");

        // en caso de que sea febrero se comprobara si es bisiesto
        if($fActual == "02"){
            if($fBi = 1){
               $dias = 29; 
            }else{
                $dias = 28;
            }
            
        }else if($fActual == "01" || $fActual == "03" || $fActual == "05" || $fActual == "07" ||$fActual == "09" ||$fActual == "10" ||$fActual == "12"){
            $dias = 31;      
        }else{
            $dias = 30;
        }
        
        // segun el mes se mostrara el numero de dias, y se guardara como name del div el dia y el mes actual para identificarlo 
        for($i=1;$i<=$dias;$i++){
        
        echo "<div class='dia' name='dia'.'-'.$i.'-'.'$fActual'>$i</div>";

        }

    }

    // funcion para mostrar un div con la semana correspondiente al dia actual
    function mostrarSemana($mes){

        // dia del mes
        $fDia = date("j");
        // numero de dias que tiene el mes
        $diasMes = date("t");

        $diaCita = $fDia+7;

        // en caso de que la suma sea mayor al dias que tiene el mes se hará la operacion para mostrar así la semana de manera correcta
        if($diaCita > $diasMes){
            $diaCita = $diasMes - $fDia; 
            
        }
    
        echo "<div class='semanaMostrada'>$fDia - ".$fDia + $diaCita ." $mes</div>";
            
    }

    function moverDia(){
        $dia = diaSemana();
        require_once("../../js/Calendario.js");

        if($dia == "Lunes"){
            echo "<button id='mas' onclick=''></button>";
        }
    }


    function diaSemana(){
                
        $fDiaLetra = date("N");
        
            switch($fDiaLetra){
                case 1:
                    $dia = "Lunes";
                    break;
                case 2:
                    $dia = "Martes";
                    break;
                case 3:
                    $dia = "Miercoles";
                    break;
                case 4:
                    $dia = "Jueves";
                    break;
                case 5:
                    $dia = "Viernes";
                    break;
                case 6:
                    $dia = "Sabado";
                    break;
                case 7:
                    $dia = "Domingo";
                    break; 
                
                }   
                
                return $dia;      
    }

    function generarHoras(){
        //creacion de variables
        $hora = 10;
        $min = "00";

        //dia actual
        $idDia = date("j");

        //mes actual
        $fMes = date("n");

        //año actual
        $fYear = date("y");
        //array para guardar el id de cada div
        $ids = [];

        //se guarda el dia el mes y el año 
        $fechaActual = $fYear.$fMes.$idDia;

        //se generan 18 divs con cada una de las horas
        for($i=0;$i<18;$i++){

            //cuando llegue al 6 div se cambiara la hora, para mostrar el horario de tarde
            if($i == 5){
                $hora = 15;
                $min ="00";

                //se guardan dentro del array la fecha actual con horas y minutos
                $ids[$i] = $fechaActual.$hora.$min;
                //se muestran los divs
                echo "<form action='#' method='post'>";
                    echo "<input class='tarde horas' id='$ids[$i]' name='$ids[$i]' type='submit' value='$hora:$min'>";
                echo "</form>";

            //a partir del 6 div se cambia el incremento de los minutos
            }else if($i>5){
                
                //en un div par se mostraran 30 min sino 00 y se incrementarán las horas
                if($i%2==0){
                    $min = "30";
                }else{
                    $min ="00";
                    $hora++;
                }
                //se guardan dentro del array la fecha actual con horas y minutos
                $ids[$i] = $fechaActual.$hora.$min;
                //se muestran los divs
                echo "<form action='#' method='post'>";
                    echo "<input class='horas' id='$ids[$i]' name='$ids[$i]' type='submit' value='$hora:$min'>";
                echo "</form>";

                

            }else{

                //se guardan dentro del array la fecha actual con horas y minutos
                $ids[$i] = $fechaActual.$hora.$min;
                //se muestran los divs
                echo "<form action='#' method='post'>";
                    echo "<input class='horas' id='$ids[$i]' name='$ids[$i]' type='submit' value='$hora:$min'>";
                echo "</form>";

                //en un div par se mostraran 30 min sino 00 y se incrementarán las horas
                if($i%2==0){
                    $min = "30";
                }else{
                    $min ="00";
                    $hora++;
                }
                
            }
        }
        
        
        //se devuelve el array con los id de cada div
        return $ids;
        
    }
   
?>

    