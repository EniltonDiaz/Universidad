<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet">
    <title>Manejo de variables y operadores</title>
</head>

<body>
    <header>
        <h3 id="centrado">PAGO DE EMPLEADOS</h3>
    </header>
    <section>
        <form name="frmPago" method="POST">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="200">Empleado</td>
                    <input type="text" name="txtEmpleado" size="70" /></td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td><input type="text" name="txtHoras" /></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><input type="text" name="txtTarifa" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Procesar" /></td>
                    <td><input type="reset" value="Limpiar" /></td>
                </tr>
                <?php
				 error_reporting(0);
				 $empleado=$_POST['txtEmpleado'];
				 $horas=$_POST['txtHoras'];
				 $tarifa=$_POST['txtTarifa'];

                 $sueldoBruto=$horas*$tarifa;
                 $descuentoEssalud=$sueldoBruto*0.12;
                 $descuentoAFP=sueldoBruto*0.10;

                 $sueldoNeto=$sueldoBruto-$descuentoEssalud-$descuentoAFP
				?>
                <tr>
                    <td>Empleado</td>
                    <td><?php echo $empleado; ?></td>
                </tr>
                <tr>
                    <td>Horas Trabajadas</td>
                    <td><?php echo $horas; ?></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><?php echo "$ ".number_format($tarifa,2); ?></td>
                </tr>
                <tr>
                    <td>Sueldo bruto</td>
                    <td><?php echo "$ ".number_format($sueldoBruto,2); ?></td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td><?php echo "$ ".number_format($descuentoEssalud,2); ?></td>
                </tr>
                <tr>
                    <td>Sueldo neto</td>
                    <td><?php echo "$ ".number_format($sueldoNeto,2); ?></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados</h6>
    </footer>
</body>

</html>