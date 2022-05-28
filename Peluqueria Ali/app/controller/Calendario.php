<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link rel="stylesheet" href="../../css/estiloCalendario.css">
    <?php 
    // se hace un require para poder utilizar las funciones necesarias
        require_once("Usuario.php");        
        require_once("./conexion.inc.php");
        $conexion = Conexion::openConexion();

        require_once("./funcionesCalendario.php");
    // se inicia la sesion
        session_start();
    ?>
</head>
<body>

<input class="check" type="checkbox">
    
    <div class="respmenu">       
        <nav>
            <ul>
                <li><a href="../../index.php">Inicio</a></li>
                <li><a href="#">Calendario</a></li>
                <li><a href="./logout.php" class="cerrarSesion">Cerrar sesión</a></li>
            </ul>
        </nav>
    </div>

    <div class="superior">
        <div class="menuH">
            <div class="hamburguesa bar1"></div>
            <div class="hamburguesa bar2"></div>
            <div class="hamburguesa bar3"></div>
        </div>

    </div>

    <main>
        <div class="mainCalendario"> 

            <div class="calendario">
                
                <?php
                echo $_SESSION['nombre'];
                    $dia = diaSemana(); 
                    $mes = mesSpain();
                    mostrarSemana($mes);
                ?>

            </div>           
            

            <div class="diaLetra">
                <h1><?php echo $dia; ?></h1>
            </div>

            <div class="conjuntoHoras">
                <div class="Horas">
                    <?php $ids = generarHoras();
                    
                    print_r($ids);
                    $correo  = $_SESSION['correo'];
                    
                    if(isset ($_POST[$ids[0]])){
                        $insert = $conexion->exec("INSERT INTO Cita (fecha_hora, disponible, correo) VALUES ('$ids[0]',1,'$correo')");
                    }
                    
                    ?>
                </div>
            </div>  
            
        </div>

    </main>
    
    <script type="text/javascript">
        // var ids = <?php echo json_encode($ids);?>;
        // var div;
        // const ai = <?php echo a();?>
        // div = document.getElementsByClassName("horas");

        // console.log(ai);



        // for(let i =0; i<18; i++){

        //     div[i].addEventListener("click", () => {
        //         console.log(ai); 
               
        //     });
        // }   
    </script>
</body>
</html>