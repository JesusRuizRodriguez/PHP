<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Document html">
    <meta name="author" content="Jesús.R">
    <meta name="keywords" content="computers,programing,web design,html,html5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="es-ES">
</head>
<body>
    <?php 
    

    foreach($_POST as $key => $value){ 
        echo $key.'==>'.$value.'<br>';
}
    ?>
</body>
</html>