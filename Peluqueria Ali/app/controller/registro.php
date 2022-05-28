<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluquería Ali</title>
    <link rel="stylesheet" href="../../css/estiloRegistro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ralewaydisplay=swap" rel="stylesheet"> 
    
</head>
<body>

    <div class="center">
        <div class="login">
        
        <h2>Registro</h2>

        <form action="#" method="post">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" required pattern="[a-zA-Z0-9].*@(outlook|gmail|hotmail).(com|es)">

            <label for="tlf">Telefono</label>
            <input type="text" name="tlf" id="telefono" required>

            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass" required>

            <label for="repetirpass">Repetir Contraseña</label>
            <input type="password" name="repetirpass" id="repetirpass" required>

            <div class="submitLogin">
                <input type="submit" name="submit" value="Regístrate">
            </div>
            
        </form>

        <?php 
        require_once("./Usuario.php");        
        require_once("./conexion.inc.php");
        $conexion = Conexion::openConexion();

        if (isset($_POST['submit'])) {
            //Comprobamos que todos los campos necesarios han sido rellenados en el formulario
            if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['repetirpass']) && isset($_POST['pass']) && isset($_POST['tlf'])) {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $repetirpass = $_POST['repetirpass'];
                $tlf = $_POST['tlf'];
                $pass= $_POST['pass'];
                
                //Encriptación de la contraseña
                
                //Formateamos la fecha para almacenarla en la base de datos
                // $fecha = date('Y-m-d', strtotime($_POST['fecha']));
                
                Usuario::preRegistro($conexion, $nombre, $correo, $tlf, $pass, $repetirpass);
                
            }
         }
        ?>
        

        </div>
    </div>
</body>
</html>