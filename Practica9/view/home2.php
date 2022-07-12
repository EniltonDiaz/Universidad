<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}else{
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
    <title>Futbol</title>
    <style>
    .carousel-inner img {
        width: 35%;
        height: 10%;
    }

    body {
        background: rgba(125, 172, 199, 0.911);
    }
    </style>
</head>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="view/imagenes/logomx.jpg">
                <img src="imagenes/logomx.jpg" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="list2.php" class="btn btn-primary">Regresar</a>
                </li>
                <li class="nav-item">
                    <a href="salir.php" class="btn btn-danger">Cerrar Sesion</a>
                </li>
                <h1>
                    <font color="white">Bienvenido Jugador <b><?php echo $_SESSION["usuario"]; ?></font>
                </h1>
            </ul>
        </nav>
    </div>

    <center>
        <h3>TABLA GENERAL</h3>
        <table style="font-family:copperplate" width="80%" border="1" cellpadding="3" cellspacing="2"
            bordercolor="#999999">

            <tr>
                <th>Pos</th>
                <th>Club</th>
                <th>JJ</th>
                <th>JG</th>
                <th>JE</th>
                <th>JP</th>
                <th>GF</th>
                <th>GC</th>
                <th>Dif</th>
                <th>PTS</th>
            </tr>

            <tbody>
                <tr style="display: table-row ;">
                    <td>1
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/tigres.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            TIGRES
                        </a>

                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>24</td>
                    <td>13</td>
                    <td>11</td>
                    <td>26</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>2
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/pachuca.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            PACHUCA
                        </a>

                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>1</td>
                    <td>2</td>
                    <td>22</td>
                    <td>11</td>
                    <td>11</td>
                    <td>25</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>3
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/puebla.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            PUEBLA
                        </a>

                    </td>
                    <td>12</td>
                    <td>6</td>
                    <td>4</td>
                    <td>2</td>
                    <td>21</td>
                    <td>13</td>
                    <td>8</td>
                    <td>22</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>4
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/cruzazul.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            CRUZ AZUL
                        </a>

                    </td>
                    <td>12</td>
                    <td>6</td>
                    <td>2</td>
                    <td>4</td>
                    <td>18</td>
                    <td>14</td>
                    <td>4</td>
                    <td>20</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>5
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/atlas.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            ATLAS
                        </a>

                    </td>
                    <td>12</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>13</td>
                    <td>9</td>
                    <td>4</td>
                    <td>19</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>6
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/leon.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            LEON
                        </a>

                    </td>
                    <td>12</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>12</td>
                    <td>12</td>
                    <td>0</td>
                    <td>19</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>7
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/toluca.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            TOLUCA
                        </a>

                    </td>
                    <td>11</td>
                    <td>5</td>
                    <td>1</td>
                    <td>5</td>
                    <td>12</td>
                    <td>21</td>
                    <td>-9</td>
                    <td>16</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>8
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/monterrey.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            MONTERREY
                        </a>

                    </td>
                    <td>10</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>13</td>
                    <td>9</td>
                    <td>4</td>
                    <td>15</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>9
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/pumas.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            PUMAS
                        </a>

                    </td>
                    <td>12</td>
                    <td>4</td>
                    <td>3</td>
                    <td>5</td>
                    <td>17</td>
                    <td>14</td>
                    <td>3</td>
                    <td>15</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>10
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/santos.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            SANTOS
                        </a>

                    </td>
                    <td>12</td>
                    <td>4</td>
                    <td>3</td>
                    <td>5</td>
                    <td>20</td>
                    <td>20</td>
                    <td>0</td>
                    <td>15</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>11
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/necaxa.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            NECAXA
                        </a>

                    </td>
                    <td>12</td>
                    <td>4</td>
                    <td>2</td>
                    <td>6</td>
                    <td>13</td>
                    <td>16</td>
                    <td>-3</td>
                    <td>14</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>12
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/tijuana.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            TIJUANA
                        </a>

                    </td>
                    <td>11</td>
                    <td>4</td>
                    <td>2</td>
                    <td>5</td>
                    <td>9</td>
                    <td>16</td>
                    <td>-7</td>
                    <td>14</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>13
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/chivas.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            GUADALAJARA
                        </a>

                    </td>
                    <td>11</td>
                    <td>3</td>
                    <td>4</td>
                    <td>4</td>
                    <td>16</td>
                    <td>15</td>
                    <td>1</td>
                    <td>13</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>14
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/america.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            AMERICA
                        </a>

                    </td>
                    <td>12</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>14</td>
                    <td>16</td>
                    <td>-2</td>
                    <td>13</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>15
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/sanluis.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            ATL. SAN LUIS
                        </a>

                    </td>
                    <td>11</td>
                    <td>4</td>
                    <td>1</td>
                    <td>6</td>
                    <td>12</td>
                    <td>14</td>
                    <td>-2</td>
                    <td>13</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>16
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/queretaro.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            QUERETARO
                        </a>

                    </td>
                    <td>12</td>
                    <td>2</td>
                    <td>6</td>
                    <td>4</td>
                    <td>11</td>
                    <td>16</td>
                    <td>-5</td>
                    <td>12</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>17
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/mazatlan.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            MAZATLAN
                        </a>

                    </td>
                    <td>12</td>
                    <td>2</td>
                    <td>2</td>
                    <td>8</td>
                    <td>12</td>
                    <td>21</td>
                    <td>-9</td>
                    <td>8</td>
                </tr>
                <tr style="display: table-row ;">
                    <td>18
                    </td>
                    <td class="col-xs-12" style="text-align: left !important">
                        <a class="loadershow col-xs-3">
                            <img src="imagenes/equipos/juarez.jpg">
                        </a>
                        <a class="tpts loadershow col-xs-9 hidden-xs">
                            JUAREZ
                        </a>

                    </td>
                    <td>12</td>
                    <td>2</td>
                    <td>2</td>
                    <td>8</td>
                    <td>8</td>
                    <td>17</td>
                    <td>-9</td>
                    <td>8</td>
                </tr>
            </tbody>
        </table>

        <h5 style="font-family:copperplate"><strong>JJ</strong> Juegos Jugados, <strong>JG</strong> Juegos Ganados,
            <strong>JE</strong> Juegos Empatados, <strong>JP</strong> Juegos Perdidos, <strong>GF</strong> Goles a
            Favor,
            <strong>GC</strong> Goles en Contra, <strong>Dif</strong> Diferencia de Goles, <strong>PTS</strong> Puntos
        </h5>
        <p src="imagenes/gignac.jpg">Participan automáticamente por el Título de Campeón de la LIGA MX en los Torneos
            Apertura 2021 y Clausura
            2022, los doce primeros Clubes de la Tabla General de Clasificación de cada Torneo al término de las 17
            Jornadas.</p>
        <a href="imagenes/partidos.jpg" data-toggle="popover" title="Popover Header" class="btn btn-primary">Proximos
            Partidos</a>
    </center>
    <br><br>
    <center>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/goleador.jpg" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>
                            <font color="black">Goleador: André-Pierre Christian Gignac</font>
                        </h3>
                        <p>
                            <font color="black">Ha anotado 10 goles, anota cada 97 minutos</font>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/ofensiva.jpg" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>
                            <font color="black">Ofensiva: Tigres UANL</font>
                        </h3>
                        <p>
                            <font color="black">24 goles a favor</font>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/defensiva.jpg" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>
                            <font color="black">Defensi</font>
                            <font color="red">va: Atlas</font>
                        </h3>
                        <p>
                            <font color="black">9 goles e</font>
                            <font color="red">n contra</font>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/fairplay.jpg" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>
                            <font color="black">Fair Play: Tigres UANL</font>
                        </h3>
                        <p>
                            <font color="black">23 tarjetas amarillas, 0 tarjetas rojas</font>
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </center>
    <br><br>
    <center>
        <h2 style="font-family:copperplate">Ultimas Noticias</h2><br>
        <table tyle="font-family:copperplate" width="100%" border="0" cellpadding="2" bordercolor="#999999">
            <tr>
                <td>
                    <center>
                        <img src="imagenes/gignac.jpg" width="250" height="150">
                    </center>
                </td>
                <td>
                    <center>
                        <img src="imagenes/fanid.jpg" width="250" height="150">
                    </center>
                </td>
                <td>
                    <center>
                        <img src="imagenes/maquina.jpg" width="250" height="150">
                    </center>
                </td>
                <td>
                    <center>
                        <img src="imagenes/grita.jpg" width="250" height="150">
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <p style="font-family:copperplate">Tigres Gana, Gignac Anota su Decimo Gol y son lideres del
                            Torneo.
                            Tigres venció por 2-0 a Tijuana y asumió el liderato del Grita México C22 con 26 unidades y
                            luego de doce jornadas en la Fase Regular. Juan Pabló Vigón abrió el marcador sumándose al
                            ataque y André-Pierre Gignac sentenció el marcador con un 2-0 en el cierre del encuentro; el
                            francés llegó a diez anotaciones en lo que va del certamen.
                        </p>
                    </center>
                </td>
                <td>
                    <center>
                        <p style="font-family:copperplate">INAI, FMF y LIGA MX Instalarán Mesa de Trabajo Para Analizar
                            Fan ID.
                            El Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos
                            Personales (INAI), la Federación Mexicana de Fútbol (FMF) y la LIGA MX acordaron instalar
                            una mesa técnica de trabajo conjunto, con el propósito de analizar la estrategia que buscan
                            implementar los dirigentes del fútbol para prevenir la violencia en los estadios y
                            garantizar la seguridad de los aficionados.
                        </p>
                    </center>
                </td>
                <td>
                    <center>
                        <p style="font-family:copperplate">La Máquina le ganan al Campeón.
                            La ventaja estuvo a nada de ser ampliada por Antuna que disparó de larga distancia ante el
                            gran lance del portero colombiano.

                            En el segundo tiempo Atlas se quedó a centímetros del empate con un remate de cabeza picado
                            que se estrelló de lleno en la base del poste.
                        </p>
                    </center>
                </td>
                <td>
                    <center>
                        <p style="font-family:copperplate">Todas y todos somos diferentes, Grita por la Inclusión.
                            En la LIGA BBVA MX el mes de abril estará dedicado a la campaña Por la Inclusión, será por
                            medio de diferentes mensajes en las tres categorías que la cancha se abrirá para todos,
                            demostrando que el fútbol no discrimina y es un eje fundamental para el desarrollo y
                            crecimiento social.

                            La Organización de las Naciones Unidas para la Educación, la Ciencia y la Cultura (UNESCO)
                            se une al llamado de la LIGA BBVA MX en la búsqueda de concientizar y sensibilizar a la
                            sociedad a favor de la inclusión y erradicar la discriminación.
                        </p>
                    </center>
                </td>
            </tr>
        </table>
    </center>
</body>
<footer>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <p>
                <font color="white">&copy; 2022 Desarrollo Web, Proyecto</font>
            </p><br>
            <ul class="navbar-nav"><br>
                <li><a href="equipo.php" class="btn btn-primary">Equipo</a></li>


            </ul>
        </nav>
    </div>


</footer>

</html>
<?php
}
?>