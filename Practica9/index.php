<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=pruebas","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
	echo $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Futbol Liga MX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="view/Diseño/index.css">
</head>

<body background="view/imagenes/lmxbbva.jpg" background-size="100% 223%">
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="view/imagenes/logomx.jpg">
                <img src="view/imagenes/logomx.jpg" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="view/login.php" class="btn btn-primary">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a href="view/registro.php" class="btn btn-primary">Registrarse</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container-fluid" style="font-family:optica">
        <center>
            <h1><strong>
                    <font color="white">Liga MX
                </strong> </h1>
        </center>
        <h3><strong>
                <font color="white">Grita por la paz
            </strong> </h3>
        <h3><strong>
                <font color="white">Crea una cuenta o inicia sesion para conocer la lista de jugadores, ademas de poder
                    ver noticias
                    sobre el
                    futbol mexicano.
            </strong> </h3>
    </div>
    <center>
        <div class="container" style="font-family:optica">
            <h2><strong>
                    <font color="white">Progreso del torneo Clausura 2022
                </strong> </h2>
            <div class="progress">
                <div class="progress-bar" style="width:70%"><strong>60%</strong>
                </div>
            </div>
    </center>
    <!--<img src="view/imagenes/cmc.jpg" class="rounded" alt="Cinque Terre" width="900" height="336">-->
</body>


</html>