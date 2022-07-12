<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Diferencia entre echo y print</title>
</head>

<body>
    <header>
        <h3 id="centrado" align="center">CASA DE CAMBIO</h3>
    </header>
    <section>
        <form name="frmMontos" method="POST" action="cambio.php">
            <table border="0" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td width="200">Monto en soles</td>
                    <td width="200">
                        <input type="text" name="txtSoles" />
                    </td>
                </tr>
                <tr>
                    <td>Monto en dolares</td>
                    <td><input type="text" name="txtDolares" /></td>
                </tr>
                <tr>
                    <td>Monto en marcos</td>
                    <td><input type="text" name="txtMarcos" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Procesar" /></td>
                    <td><input type="reset" value="Limpiar" /></td>
                </tr>
                <?php
				 error_reporting(0);
				 $soles=$_POST['txtSoles'];
				 $dolares=$_POST['txtDolares'];
				 $marcos=$_POST['txtMarcos'];
				 $euros=(($soles/3.51)+$dolares+($marcos/2.12))*1.09; 
				?>
                <tr>
                    <td>
                        Total soles<br>
                        Tolal dolares<br>
                        Total marcos<br>
                        Monto total en euros
                    </td>
                    <td>
                        <?php echo "$/. ",number_format($soles, 2)."<br>";
						      echo"$ ".number_format($dolares, 2)."<br>";
						      echo number_format($marcos, 2)."DEM<br>";
						      echo number_format($euros, 2)."euros";
						?>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6 id="centrado" align="center">Todos los derechos reservados</h6>
    </footer>
</body>

</html>