<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluquería Ali</title>
    <link rel="stylesheet" href="./css/estiloIndex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ralewaydisplay=swap" rel="stylesheet"> 
</head>
<body>
    <?php session_start(); echo $_SESSION['correo']; ?>
    <input class="check" type="checkbox">
    
    <div class="respmenu">       
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="./app/controller/LogicaCalendario.php">Calendario</a></li>
                <li><a href="./app/controller/logout.php" class="cerrarSesion">Cerrar sesión</a></li>
            </ul>
        </nav>
    </div>

    <div class="superior">
        <div class="menuH">
            <div class="hamburguesa bar1"></div>
            <div class="hamburguesa bar2"></div>
            <div class="hamburguesa bar3"></div>
        </div>

        <h1>Peluquería Ali</h1>
    </div>
    

    <div class="imagenPrincipal">
        <img id="logo" src="./img/logo.png" alt="imagen no encontrada">
    </div>
    
    <form action="./app/controller/login.php">
        <input type="submit" value="Pedir Cita">
    </form>

    <div class="info">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.4123750681474!2d-5.309671284425552!3d35.88791472621567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0ca401aaf84ee9%3A0xe56648b6d45deb89!2sPeluqueria%20Ali!5e0!3m2!1ses!2ses!4v1652042295476!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p id="direccion">51001 Ceuta, España</p>
        <div class="numero">
            <div id="circulo">
                <img id="phoneIcon" src="./img/phoneIcon.png" alt="imagen no encontrada">
            </div>
            <p id="telefono">+34 666 86 66 47</p>
        </div>
    </div>
</body>
</html>