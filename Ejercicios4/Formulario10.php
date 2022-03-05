<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
</head>
<body>
  <?php 

    $numero=$_POST['numero'];
    $numeromedia=$_POST['medianum'];
    
    if($numero > 0){
        ?>
        <form action="Ejercicio10.php" method="post">
            <input type="hidden" name="num" value="<?php echo $numero; ?>">
            <input type="submit" value="Continuar">
        </form>
        <?php
    }else{
        echo $numeromedia;
    }

  ?>  
</body>
</html>