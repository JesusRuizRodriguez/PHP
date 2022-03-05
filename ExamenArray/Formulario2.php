<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_POST['numero'];
        $aux;
        for($i=count_chars($numero);$i>-1;$i){
         $aux = $numero %10;
         $aux = pow(2*$i);

        }
    ?>
</body>
</html>