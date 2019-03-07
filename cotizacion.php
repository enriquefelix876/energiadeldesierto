<?php

    require_once('php/funciones.php');

    switch ($_POST['tarifa']) {
        
        case '1':
            require_once('php/proyeccion1.php');
            break;
        
        case '1A':
            require_once('php/proyeccion1A.php');
            break;
        
        case '1B':
            require_once('php/proyeccion1B.php');
            break;
        
        case '1C':
            require_once('php/proyeccion1C.php');
            break;
        
        case '1D':
            require_once('php/proyeccion1C.php');
            break;
        
        case '1E':
            require_once('php/proyeccion1E.php');
            break;
        
        case '1F':
            require_once('php/proyeccion1F.php');
            break;
        
        default:
            break;
    }

    $consumoFuturo = array();

    //Constante
    $produccionPromedio = 5;
    $AFavor = false;
    $capacidad = 6.0;

    //Area requerida
    $areaRequerida = ($capacidad/0.3)*(0.992*1.96);

    //Numero de paneles
    $paneles = $capacidad/0.3;

    //Precio total
    $precioTotal = ($capacidad/0.3)*8500;

    //Obtener Promedio Diario
    $promedioDiario = obtenerPromedioDiario($consumoEnero, $consumoFebrero, $consumoMarzo, $consumoAbril, 
    $consumoMayo, $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, $consumoOctubre, 
    $consumoNoviembre, $consumoDiciembre);
        
    //Capacidad requerida obtenida a partir de sacar el promedio diario entre la produccion promedio
    $capacidadRequerida = $promedioDiario / $produccionPromedio;
        
    //Obtener Produccion diaria
    $produccionDiaria = $produccionPromedio * $capacidad;
        
    //Obtener Produccion Mensual
    $produccionMensual = $produccionDiaria * 30;

    $consumoFuturo = consumoFuturo($consumoPorMes, $produccionMensual);

    //Obtener el total anual aplicando el IVA
    $totalAnualAnterior = obtenerTotalAnualAnterior($consumoEnero, $consumoFebrero, $consumoMarzo, 
    $consumoAbril, $consumoMayo, $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, 
    $consumoOctubre, $consumoNoviembre, $consumoDiciembre);
    switch ($_POST['tarifa']) {
        
        case '1':
            require_once('php/proyeccion1Futuro.php');
            break;
        
        case '1A':
            require_once('php/proyeccion1AFuturo.php');
            break;
        
        case '1B':
            require_once('php/proyeccion1BFuturo.php');
            break;
        
        case '1C':
            require_once('php/proyeccion1CFuturo.php');
            break;
        
        case '1D':
            require_once('php/proyeccion1DFuturo.php');
            break;
        
        case '1E':
            require_once('php/proyeccion1EFuturo.php');
            break;
        
        case '1F':
            require_once('php/proyeccion1FFuturo.php');
            break;
        
        default:
            break;
    }

    //Obtener el total anual aplicando el IVA
    $totalAnualPosterior = obtenerTotalAnualAnterior($consumoEneroFuturo, $consumoFebreroFuturo, 
    $consumoMarzoFuturo, $consumoAbrilFuturo, $consumoMayoFuturo, $consumoJunioFuturo, $consumoJulioFuturo, 
    $consumoAgostoFuturo, $consumoSeptiembreFuturo, $consumoOctubreFuturo, $consumoNoviembreFuturo, 
    $consumoDiciembreFuturo);

    $totalFinal = $totalAnualAnterior - $totalAnualPosterior;


?> 

<!DOCTYPE html>
    
    <html lang="en">
    
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome Icons -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<!-- Plugin CSS -->
		<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<!-- Theme CSS - Includes Bootstrap -->
		<link href="css/creative.min.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.js"></script>
		<link rel="icon" href="img/icon.png" type="image/x-icon" />
        <script src="js/main.js"></script>
	</head>
    
    <body>
    
    <div class="container mt-3">
        <div class="row justify-content-center">
            <h2>Análisis energético y propuesta de sistema fotovoltaico</h2>
        </div>
    </div>

    <div class="container-fluid" id="main-content">
        <div class="container container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4 border datos rounded">
                    <span class="font-weight-bold"><?php echo $titular ?>
                    </span class="font-weight-bold"><br>
                    <span class="font-weight-bold">NO. DE SERVICIO:</span><?php echo " ". $servicio ?><br>
                    <span class="font-weight-bold">Frecuencia de pago: <?php echo $frecuencia_pago ?></span><br>
                    <?php echo $municipio.", ".$estado ?><br>
                    <span class="font-weight-bold">TARIFA:</span><?php echo " ". $tarifa ?><br>
                </div>
                <div class="col-md-4 border datos rounded">
                    <span class="font-weight-bold">Capacidad:</span><?php echo " ". $capacidad . " kW" ?><br>
                    <span class="font-weight-bold">Area requerida: </span><?php echo $areaRequerida ?><br>
                    <span class="font-weight-bold">No. de paneles:</span><?php echo " ". $paneles ?><br>
                    <span class="font-weight-bold">Promedio diario:</span><?php echo " ". round($promedioDiario, 2) ." kWh" ?><br>
                    <span class="font-weight-bold">Prod. promedio diaria:</span><?php echo " ". $produccionDiaria . " kWh"  ?><br>
                    <span class="font-weight-bold">Prod. promedio mensual:</span><?php echo " ". $produccionMensual . " kWh"  ?><br>
                    <span class="font-weight-bold">Precio: </span><?php echo "$". $precioTotal ?><br>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <h3>Análisis de consumo y escenario de ahorros.</h3>
    </div>


    <?php if($frecuencia_pago == "Mensual"): ?>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Período</th>
                <th scope="col">Consumo [kWh]</th>
                <th scope="col">Facturación</th>
                <th scope="col">Pudo haber pagado</th>
                <th scope="col">Ahorro</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                <th scope="row"><span id="mes1txt">Febrero</span></th>
                <td><?php echo $_POST['mes1']?></td>
                <td><?php echo round($consumoFebrero['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFebreroFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoFebrero['pago']*1.16)-($consumoFebreroFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes2txt">Marzo</span></th>
                <td><?php echo $_POST['mes2']?></td>
                <td><?php echo round($consumoMarzo['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoMarzoFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoMarzo['pago']*1.16)-($consumoMarzoFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes3txt">Abril</span></th>
                <td><?php echo $_POST['mes3']?></td>
                <td><?php echo round($consumoAbril['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoAbrilFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoAbril['pago']*1.16)-($consumoAbrilFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes4txt">Mayo</span></th>
                <td><?php echo $_POST['mes4']?></td>
                <td><?php echo round($consumoMayo['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoMayoFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoMayo['pago']*1.16)-($consumoMayoFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes5txt">Junio</span></th>
                <td><?php echo $_POST['mes5']?></td>
                <td><?php echo round($consumoJunio['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoJunioFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoJunio['pago']*1.16)-($consumoJunioFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes6txt">Julio</span></th>
                <td><?php echo $_POST['mes6']?></td>
                <td><?php echo round($consumoJulio['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoJulioFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoJulio['pago']*1.16)-($consumoJulioFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes7txt">Agosto</span></th>
                <td><?php echo $_POST['mes7']?></td>
                <td><?php echo round($consumoAgosto['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoAgostoFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoAgosto['pago']*1.16)-($consumoAgostoFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes8txt">Septiembre</span></th>
                <td><?php echo $_POST['mes8']?></td>
                <td><?php echo round($consumoSeptiembre['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoSeptiembreFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoSeptiembre['pago']*1.16)-($consumoSeptiembreFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes9txt">Octubre</span></th>
                <td><?php echo $_POST['mes9']?></td>
                <td><?php echo round($consumoOctubre['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoOctubreFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoOctubre['pago']*1.16)-($consumoOctubreFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes10txt">Noviembre</span></th>
                <td><?php echo $_POST['mes10']?></td>
                <td><?php echo round($consumoNoviembre['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoNoviembreFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoNoviembre['pago']*1.16)-($consumoNoviembreFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <tr>
                <th scope="row"><span id="mes11txt">Diciembre</span></th>
                <td><?php echo $_POST['mes11']?></td>
                <td><?php echo round($consumoDiciembre['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoDiciembreFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoDiciembre['pago']*1.16)-($consumoDiciembreFuturo['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes12txt">Enero</span></th>
                <td><?php echo $_POST['mes12']?></td>
                <td><?php echo round($consumoEnero['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoEneroFuturo['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoEnero['pago']*1.16)-($consumoEneroFuturo['pago']*1.16), 2)?></td>
                </tr>
                <th scope="col">Total anual</th>
                <th scope="col"></th>
                <th scope="col"><?php echo round($totalAnualAnterior, 2) ?></th>
                <th scope="col"><?php echo round($totalAnualPosterior, 2) ?></th>
                <th scope="col"><?php echo round($totalFinal, 2)?></th>
                </tr>
            </tbody>
            </table>
    </div>

    <?php endif; ?>

    <script>
        generarMeses("<?php echo $_POST['mes'] ?>");
    </script>
    </body>
    
    </html>