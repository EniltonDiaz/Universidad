<?php
require_once '../model/config.php';
$result=false;
if (!empty($_POST)) {
	$jugador=$_POST['jugador'];
	$equipo=$_POST['equipo'];
	$tipo= $_POST['tipo'];

	$sql="INSERT INTO jugadores(jugador,equipo,tipo) VALUES (:jugador,:equipo,:tipo)";
	$query = $pdo->prepare($sql);
	$result=$query->execute(['jugador'=>$jugador,'equipo'=>$equipo,'tipo'=>$tipo]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Diseño/registro.css">
    <title>PROYECTO</title>
</head>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="view/imagenes/logomx.jpg">
                <img src="imagenes/logomx.jpg" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="list.php" class="btn btn-primary">Jugadores</a>
                </li>
                <li><a href="salir.php" class="btn btn-danger">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" style="font-family:copperplate">
        <center>
            <h1 class="bg-primary text-white">Agregar Jugador</h1>
            <?php
		if ($result==true){
			echo '<div class="alert alert-seccess">Completado!</div>';
		}
		?>

            <form action="add.php" method="post">
                <p style="border: solid 1px #000000; " class="bg-primary text-white">Jugador
                    <input style="border: solid 1px #000000; " placeholder="ingrese el jugador" class="form-control"
                        type="text" name="jugador" id="jugador" required>
                </p>

                <p style="border: solid 1px #000000; " class="bg-primary text-white">Equipo
                    <input style="border: solid 1px #000000; " placeholder="ingrese el equipo" class="form-control"
                        type="text" name="equipo" id="equipo" required>
                </p>

                <p style="border: solid 1px #000000; " class="bg-primary text-white">Tipo
                    <input style="border: solid 1px #000000; " placeholder="ingrese el tipo" class="form-control"
                        type="text" name="tipo" id="tipo" required>
                </p>

                <input type="submit" value="Agregar" class="btn btn-primary">

            </form>
        </center>


    </div>



</body>

</html>