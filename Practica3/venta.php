<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet">
    <title>Manejo de Constantes</title>
</head>

<body>
    <header>
        <h3 id="centrado">VENTA DE PRODUCTO</h3>
    </header>
    <section>
        <form name="frmVenta" method="POST">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="200">Cantidad</td>
                    <td><input type="text" name="txtCantidad" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Procesar" />
                        <input type="reset" value="Limpiar" />
                    </td>
                </tr>
                <?php
				 error_reporting(0);
				 define("COSTOUNITARIO",20.55);
                 define("DESCUENTO",0.10);
                 
                 $cantidad=$_POST['txtCantidad'];

                 $importeCompra=COSTOUNITARIO*$cantidad;
                 $importeDescuento=$importeCompra*DESCUENTO;
                 $importePagar=$importeCompra-$importeDescuento;
				?>
                <tr>
                    <td>Precio del Producto</td>
                    <td><?php echo "$ ".COSTOUNITARIO; ?></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><?php echo $Cantidad; ?></td>
                </tr>
                <tr>
                    <td>Importe de compra</td>
                    <td><?php echo "$ ".number_format($importeCompra,2); ?></td>
                </tr>
                <tr>
                    <td>Importe de descuento</td>
                    <td><?php echo "$ ".number_format($importeDescuento,2); ?></td>
                </tr>
                <tr>
                    <td>
                        Importe Neto
                    </td>
                    <td><?php echo "$ ".number_format($importePagar,2);?></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados</h6>
    </footer>
</body>

</html>