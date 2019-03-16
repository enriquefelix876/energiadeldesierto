<?php

    //Variables 
	$titular= $_POST['titular'];
	$estado = $_POST['estado'];
	$municipio = $_POST['municipio'];
	$tarifa = $_POST['tarifa'];
	$servicio = $_POST['servicio'];
    $mes = $_POST['mes'];
    $frecuencia = $_POST['frecuencia_pago'];
    $proyeccionPrevia = array();
    $proyeccionFutura = array();
        
    if ($frecuencia=="Mensual") {
        $consumoPorMes = array("mes1" => $_POST['mes1'],"mes2" => $_POST['mes2'],"mes3" => $_POST['mes3'],
        "mes4" => $_POST['mes4'],"mes5" => $_POST['mes5'],"mes6" => $_POST['mes6'],"mes7" => $_POST['mes7'],
        "mes8" => $_POST['mes8'],"mes9" => $_POST['mes9'],"mes10" => $_POST['mes10'],"mes11" => $_POST['mes11'],
        "mes12" => $_POST['mes12']
        );
    }else{

        $consumoPorMes = array("mes1" => $_POST['mes1'],"mes2" => $_POST['mes2'],"mes3" => $_POST['mes3'],
        "mes4" => $_POST['mes4'],"mes5" => $_POST['mes5'],"mes6" => $_POST['mes6']
        );
    }
    
    require_once('php/funciones.php');

    $promedioMensual = obtenerPromedioMensual($consumoPorMes, $frecuencia);
    $DAC = obtenerTipoConsumo($promedioMensual, $tarifa);
    $limiteDAC = obtenerLimiteDAC($tarifa);

    switch ($_POST['tarifa']) {
        
        case '1':
        
        if(!$DAC){
            if($frecuencia=="Mensual"){

                require_once('php/proyeccion1.php');
                $proyeccionPrevia = generarProyeccion1($consumoPorMes);

            }elseif ($frecuencia=="Bimestral") {
                require_once('php/proyeccionBimestral1.php');
                $proyeccionPrevia = generarProyeccion1Bimestral($consumoPorMes);

            }

        }else{
            if($frecuencia=="Mensual"){

                require_once('php/proyeccionDAC.php');
                $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

            }elseif ($frecuencia=="Bimestral") {
                require_once('php/proyeccionBimestralDACBimestral.php');
                $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

            }

        }

        break;
        
        case '1A':
            
            if(!$DAC){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1A.php');
                    $proyeccionPrevia = generarProyeccion1A($consumoPorMes);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1A.php');
                    $proyeccionPrevia = generarProyeccion1ABimestral($consumoPorMes);

                }

            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

                }

            }

        break;
        
        case '1B':
        
            if(!$DAC){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1B.php');
                    $proyeccionPrevia = generarProyeccion1B($consumoPorMes);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1B.php');
                    $proyeccionPrevia = generarProyeccion1BBimestral($consumoPorMes);

                }

            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

                }

            }

        break;
        
        case '1C':
            
            if(!$DAC){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1C.php');
                    $proyeccionPrevia = generarProyeccion1C($consumoPorMes);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1C.php');
                    $proyeccionPrevia = generarProyeccion1CBimestral($consumoPorMes);

                }

            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

                }

            }

        break;
        
        case '1D':
            
            if(!$DAC){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1D.php');
                    $proyeccionPrevia = generarProyeccion1D($consumoPorMes);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1D.php');
                    $proyeccionPrevia = generarProyeccion1DBimestral($consumoPorMes);

                }

            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

                }

            }

        break;
        
        case '1E':

        if(!$DAC){

            if($frecuencia=="Mensual"){

                require_once('php/proyeccion1E.php');
                $proyeccionPrevia = generarProyeccion1E($consumoPorMes);

            }elseif ($frecuencia=="Bimestral") {
                require_once('php/proyeccionBimestral1E.php');
                $proyeccionPrevia = generarProyeccion1EBimestral($consumoPorMes);

            }

        }else{
            if($frecuencia=="Mensual"){

                require_once('php/proyeccionDAC.php');
                $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

            }elseif ($frecuencia=="Bimestral") {
                require_once('php/proyeccionBimestralDACBimestral.php');
                $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

            }

        }

        break;
        
        case '1F':
            
        if(!$DAC){

            if($frecuencia=="Mensual"){

                require_once('php/proyeccion1F.php');
                $proyeccionPrevia = generarProyeccion1F($consumoPorMes);

            }elseif ($frecuencia=="Bimestral") {
                require_once('php/proyeccionBimestral1F.php');
                $proyeccionPrevia = generarProyeccion1FBimestral($consumoPorMes);

            }

        }else{
            if($frecuencia=="Mensual"){

                require_once('php/proyeccionDAC.php');
                $proyeccionPrevia = generarProyeccionDAC($consumoPorMes, $limiteDAC);

            }elseif ($frecuencia=="Bimestral") {
                require_once('php/proyeccionBimestralDACBimestral.php');
                $proyeccionPrevia = generarProyeccionDACBimestral($consumoPorMes, $limiteDAC);

            }

        }

        break;
        
        default:
        
            break;
    }

    $consumoFuturo = array();

    //Constante
    $produccionPromedio = 5;
    $AFavor = false;
    $capacidad = $_POST['capacidad'];

    //Area requerida
    $areaRequerida = ($capacidad/0.3)*(0.992*1.96);

    //Numero de paneles
    $paneles = $capacidad/0.3;

    //Precio total
    $precioTotal = ($capacidad/0.3)*8500;

    //Obtener Promedio Diario
    //$promedioDiario = obtenerPromedioDiario($consumoEnero, $consumoFebrero, $consumoMarzo, $consumoAbril, 
    //$consumoMayo, $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, $consumoOctubre, 
    //$consumoNoviembre, $consumoDiciembre);
        
    //Capacidad requerida obtenida a partir de sacar el promedio diario entre la produccion promedio
    //$capacidadRequerida = $promedioDiario / $produccionPromedio;
        
    //Obtener Produccion diaria
    $produccionDiaria = $produccionPromedio * $capacidad;
        
    //Obtener Produccion Mensual
    $produccionMensual = $produccionDiaria * 30;

    $consumoPosterior = consumoFuturo($consumoPorMes, $produccionMensual, $frecuencia);

    $DAC_Futuro = obtenerTipoConsumoFuturo($consumoPosterior, $frecuencia, $tarifa);

    //Asignar indice a consumo Futuro
    $consumoFuturo = asignarIndiceFuturo($consumoPosterior, $frecuencia);

    $mesesBimestralesOrdenados = array();
    
    if($frecuencia == "Mensual"){
        //Obtener el total anual aplicando el IVA
        $totalAnualAnterior = obtenerTotalAnualAnterior($proyeccionPrevia);

    }elseif ($frecuencia == "Bimestral") {

        //Obtener el total anual aplicando el IVA

        $totalAnualAnterior = obtenerTotalAnualAnteriorBimestral($proyeccionPrevia);
    }

    switch ($_POST['tarifa']) {
        
        case '1':

            if(!$DAC_Futuro){
                if($frecuencia=="Mensual"){
    
                    require_once('php/proyeccion1.php');
                    $proyeccionFutura = generarProyeccion1($consumoFuturo);
    
                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1.php');
                    $proyeccionFutura = generarProyeccion1Bimestral($consumoFuturo);
    
                }
    
            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);
    
                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);
    
                }
    
            }
            break;
        
        case '1A':

            if(!$DAC_Futuro){
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1A.php');
                    $proyeccionFutura = generarProyeccion1A($consumoFuturo);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1A.php');
                    $proyeccionFutura = generarProyeccion1ABimestral($consumoFuturo);

                }

            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);

                }

            }
            break;
        
        case '1B':
        
            if(!$DAC_Futuro){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1B.php');
                    $proyeccionFutura = generarProyeccion1B($consumoFuturo);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1B.php');
                    $proyeccionFutura = generarProyeccion1BBimestral($consumoFuturo);

                }

            }else{
                if($frecuencia=="Mensual"){

                    require_once('php/proyeccionDAC.php');
                    $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestralDACBimestral.php');
                    $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);

                    }

                }

        break;
        
        case '1C':

            if(!$DAC_Futuro){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1C.php');
                    $proyeccionFutura = generarProyeccion1C($consumoFuturo);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1C.php');
                    $proyeccionFutura = generarProyeccion1CBimestral($consumoFuturo);

                }

            }else{
                    if($frecuencia=="Mensual"){

                        require_once('php/proyeccionDAC.php');
                        $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);

                    }elseif ($frecuencia=="Bimestral") {
                        require_once('php/proyeccionBimestralDACBimestral.php');
                        $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);

                    }

                }

        break;
        
        case '1D':

            if(!$DAC_Futuro){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1D.php');
                    $proyeccionFutura = generarProyeccion1D($consumoFuturo);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1D.php');
                    $proyeccionFutura = generarProyeccion1DBimestral($consumoFuturo);

                }

            }else{
                    if($frecuencia=="Mensual"){

                        require_once('php/proyeccionDAC.php');
                        $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);

                    }elseif ($frecuencia=="Bimestral") {
                        require_once('php/proyeccionBimestralDACBimestral.php');
                        $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);

                    }

                }

        break;
        
        case '1E':
            
            if(!$DAC_Futuro){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1E.php');
                    $proyeccionFutura = generarProyeccion1E($consumoFuturo);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1E.php');
                    $proyeccionFutura = generarProyeccion1EBimestral($consumoFuturo);

                }

            }else{
                    if($frecuencia=="Mensual"){

                        require_once('php/proyeccionDAC.php');
                        $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);

                    }elseif ($frecuencia=="Bimestral") {
                        require_once('php/proyeccionBimestralDACBimestral.php');
                        $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);

                    }

                }

        break;
        
        case '1F':
            
            if(!$DAC_Futuro){

                if($frecuencia=="Mensual"){

                    require_once('php/proyeccion1F.php');
                    $proyeccionFutura = generarProyeccion1F($consumoFuturo);

                }elseif ($frecuencia=="Bimestral") {
                    require_once('php/proyeccionBimestral1F.php');
                    $proyeccionFutura = generarProyeccion1FBimestral($consumoFuturo);

                }

            }else{
                    if($frecuencia=="Mensual"){

                        require_once('php/proyeccionDAC.php');
                        $proyeccionFutura = generarProyeccionDAC($consumoFuturo, $limiteDAC);

                    }elseif ($frecuencia=="Bimestral") {
                        require_once('php/proyeccionBimestralDACBimestral.php');
                        $proyeccionFutura = generarProyeccionDACBimestral($consumoFuturo, $limiteDAC);

                    }

                }

        break;
        
        default:
            break;
    }

    if($frecuencia=="Mensual"){
        //Obtener el total anual aplicando el IVA
        $totalAnualPosterior = obtenerTotalAnualAnterior($proyeccionFutura);

    }elseif ($frecuencia == "Bimestral") {

        $totalAnualPosterior = obtenerTotalAnualAnteriorBimestral($proyeccionFutura);

    }

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
                    <span class="font-weight-bold">Frecuencia de pago: <?php echo $frecuencia ?></span><br>
                    <?php echo $municipio.", ".$estado ?><br>
                    <span class="font-weight-bold">TARIFA:</span><?php echo " ". $tarifa ?><br>
                    <span class="font-weight-bold">TARIFA </span><?php if($DAC){ echo "DAC";} else{ echo "Normal"; } echo " a " ?>
                    <span class="font-weight-bold">TARIFA </span><?php if($DAC_Futuro){ echo "DAC";} else{ echo "Normal"; } ?><br>
                </div>
                <div class="col-md-4 border datos rounded">
                    <span class="font-weight-bold">Capacidad:</span><?php echo " ". $capacidad . " kW" ?><br>
                    <span class="font-weight-bold">Area requerida: </span><?php echo $areaRequerida ?><br>
                    <span class="font-weight-bold">No. de paneles:</span><?php echo " ". $paneles ?><br>
                    <span class="font-weight-bold">Prod. promedio diaria:</span><?php echo " ". $produccionDiaria . " kWh"  ?><br>
                    <span class="font-weight-bold">Prod. promedio mensual:</span><?php echo " ". $produccionMensual . " kWh"  ?><br>
                    <span class="font-weight-bold">Precio: </span><?php echo "$". $precioTotal ?><br>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <form action="cotizacion.php" method="POST">
                    <div class="form-group">
                        <label for="capacidad">Seleccionar capacidad</label>
                        <select name="capacidad" id="capacidad" class="form-control">
                            <option value="<?php echo $capacidad ?>"><?php echo $capacidad ."kWh" ?></option>  
                            <option value="" disabled></option>                      
                            <option value="1.2">1.2 kWh</option>
                            <option value="2.4">2.4 kWh</option>
                            <option value="3.6">3.6 kWh</option>
                            <option value="4.8">4.8 kWh</option>
                            <option value="6.0">6.0 kWh</option>
                            <option value="7.2">7.2 kWh</option>
                            <option value="8.4">8.4 kWh</option>
                            <option value="9.6">9.6 kWh</option>
                            <option value="10.8">10.8 kWh</option>
                            <option value="12.0">12.0 kWh</option>
                        </select>
                        <input type="text" hidden name="tarifa" id="tarifa" value="<?php echo $tarifa ?>">
                        <input type="text" hidden name="frecuencia_pago" id="frecuencia_pago" 
                        value="<?php echo $frecuencia ?>">
                        <input type="text" hidden name="titular" id="titular" value="<?php echo $titular ?>">
                        <input type="text" hidden name="estado" id="estado" value="<?php echo $estado ?>">
                        <input type="text" hidden name="municipio" id="municipio" value="<?php echo $municipio ?>">
                        <input type="text" hidden name="servicio" id="servicio" value="<?php echo $servicio ?>">

                        <input type="text" name="mes1" id="mes1" hidden value="<?php echo $_POST['mes1'] ?>">
                        <input type="text" name="mes2" id="mes2" hidden value="<?php echo $_POST['mes2'] ?>">
                        <input type="text" name="mes3" id="mes3" hidden value="<?php echo $_POST['mes3'] ?>">
                        <input type="text" name="mes4" id="mes4" hidden value="<?php echo $_POST['mes4'] ?>">
                        <input type="text" name="mes5" id="mes5" hidden value="<?php echo $_POST['mes5'] ?>">
                        <input type="text" name="mes6" id="mes6" hidden value="<?php echo $_POST['mes6'] ?>">
                        <input type="text" name="mes7" id="mes7" hidden value="<?php echo $_POST['mes7'] ?>">
                        <input type="text" name="mes8" id="mes8" hidden value="<?php echo $_POST['mes8'] ?>">
                        <input type="text" name="mes9" id="mes9" hidden value="<?php echo $_POST['mes9'] ?>">
                        <input type="text" name="mes10" id="mes10" hidden value="<?php echo $_POST['mes10'] ?>">
                        <input type="text" name="mes11" id="mes11" hidden value="<?php echo $_POST['mes11'] ?>">
                        <input type="text" name="mes12" id="mes12" hidden value="<?php echo $_POST['mes12'] ?>">

                        <input type="text" name="mes" id="mes" hidden value="<?php echo $_POST['mes'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Seleccionar" class="btn btn-primary">
                    </div>
                </form>    
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <h3>Análisis de consumo y escenario de ahorros.</h3>
    </div>

    <?php 
    
    if ($frecuencia=="Mensual") {

        //Se ordena el consumo previo de los meses dados por el usuario
        $consumoPrevioOrdenado = ordenarConsumo($proyeccionPrevia, $mes); 

        //Se ordena el consumo futuro de los meses
        $consumoFuturoOrdenado = ordenarConsumo($proyeccionFutura, $mes);
    }

        $consumoPrevioAnual = consumoAnual($consumoPorMes);
        $consumoFuturoAnual = consumoAnual($consumoPosterior);

    ?>



    <?php if($frecuencia == "Mensual"): ?>

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Período</th>
                <th scope="col">Consumo [kWh]</th>
                <th scope="col">Consumo Futuro [kWh]</th>
                <th scope="col">Facturación</th>
                <th scope="col">Pudo haber pagado</th>
                <th scope="col">Ahorro</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                <th scope="row"><span id="mes1txt">Febrero</span></th>
                <td><?php echo $_POST['mes1']?></td>
                <td><?php echo $consumoPosterior[0] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[0]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[0]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[0]['pago']*1.16)-
                ($consumoFuturoOrdenado[0]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes2txt">Marzo</span></th>
                <td><?php echo $_POST['mes2']?></td>
                <td><?php echo $consumoPosterior[1] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[1]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[1]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[1]['pago']*1.16)-
                ($consumoFuturoOrdenado[1]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes3txt">Abril</span></th>
                <td><?php echo $_POST['mes3']?></td>
                <td><?php echo $consumoPosterior[2] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[2]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[2]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[2]['pago']*1.16)-
                ($consumoFuturoOrdenado[2]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes4txt">Mayo</span></th>
                <td><?php echo $_POST['mes4']?></td>
                <td><?php echo $consumoPosterior[3] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[3]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[3]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[3]['pago']*1.16)-
                ($consumoFuturoOrdenado[3]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes5txt">Junio</span></th>
                <td><?php echo $_POST['mes5']?></td>
                <td><?php echo $consumoPosterior[4] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[4]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[4]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[4]['pago']*1.16)-
                ($consumoFuturoOrdenado[4]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes6txt">Julio</span></th>
                <td><?php echo $_POST['mes6']?></td>
                <td><?php echo $consumoPosterior[5] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[5]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[5]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[5]['pago']*1.16)-
                ($consumoFuturoOrdenado[5]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes7txt">Agosto</span></th>
                <td><?php echo $_POST['mes7']?></td>
                <td><?php echo $consumoPosterior[6] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[6]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[6]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[6]['pago']*1.16)-
                ($consumoFuturoOrdenado[6]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes8txt">Septiembre</span></th>
                <td><?php echo $_POST['mes8']?></td>
                <td><?php echo $consumoPosterior[7] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[7]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[7]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[7]['pago']*1.16)-
                ($consumoFuturoOrdenado[7]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes9txt">Octubre</span></th>
                <td><?php echo $_POST['mes9']?></td>
                <td><?php echo $consumoPosterior[8] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[8]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[8]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[8]['pago']*1.16)-
                ($consumoFuturoOrdenado[8]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes10txt">Noviembre</span></th>
                <td><?php echo $_POST['mes10']?></td>
                <td><?php echo $consumoPosterior[9] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[9]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[9]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[9]['pago']*1.16)-
                ($consumoFuturoOrdenado[9]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <tr>
                <th scope="row"><span id="mes11txt">Diciembre</span></th>
                <td><?php echo $_POST['mes11']?></td>
                <td><?php echo $consumoPosterior[10] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[10]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[10]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[10]['pago']*1.16)-
                ($consumoFuturoOrdenado[10]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes12txt">Enero</span></th>
                <td><?php echo $_POST['mes12']?></td>
                <td><?php echo $consumoPosterior[10] ?></td>
                <td><?php echo round($consumoPrevioOrdenado[11]['pago']*1.16, 2)?></td>
                <td><?php echo round($consumoFuturoOrdenado[11]['pago']*1.16, 2)?></td>
                <td><?php echo round(($consumoPrevioOrdenado[11]['pago']*1.16)-
                ($consumoFuturoOrdenado[11]['pago']*1.16), 2)?></td>
                </tr>
                <th scope="col">Total anual</th>
                <th scope="col"><?php echo $consumoPrevioAnual ." kWh" ?></th>
                <th scope="col"><?php echo $consumoFuturoAnual ." kWh"?></th>
                <th scope="col"><?php echo "$". round($totalAnualAnterior, 2) ?></th>
                <th scope="col"><?php echo "$". round($totalAnualPosterior, 2) ?></th>
                <th scope="col"><?php echo "$". round($totalFinal, 2)?></th>
                </tr>
            </tbody>
            </table>
    </div>

    <?php elseif ($frecuencia == "Bimestral"): ?>

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Período</th>
                <th scope="col">Consumo [kWh]</th>
                <th scope="col">Consumo Futuro [kWh]</th>
                <th scope="col">Facturación</th>
                <th scope="col">Pudo haber pagado</th>
                <th scope="col">Ahorro</th>
                </tr>

                <tr>
                <th scope="row"><span id="mes1txt">Febrero</span></th>
                <td><?php echo $_POST['mes1']?></td>
                <td><?php echo $consumoPosterior[0] ?></td>
                <td><?php echo round($proyeccionPrevia[0]['pago']*1.16, 2) ?></td>
                <td><?php echo round($proyeccionFutura[0]['pago']*1.16, 2) ?></td>
                <td><?php echo round(($proyeccionPrevia[0]['pago']*1.16)-
                ($proyeccionFutura[0]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes2txt">Marzo</span></th>
                <td><?php echo $_POST['mes2']?></td>
                <td><?php echo $consumoPosterior[1] ?></td>
                <td><?php echo round($proyeccionPrevia[1]['pago']*1.16, 2) ?></td>
                <td><?php echo round($proyeccionFutura[1]['pago']*1.16, 2) ?></td>
                <td><?php echo round(($proyeccionPrevia[1]['pago']*1.16)-
                ($proyeccionFutura[1]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes3txt">Abril</span></th>
                <td><?php echo $_POST['mes3']?></td>
                <td><?php echo $consumoPosterior[2] ?></td>
                <td><?php echo round($proyeccionPrevia[2]['pago']*1.16, 2) ?></td>
                <td><?php echo round($proyeccionFutura[2]['pago']*1.16, 2) ?></td>
                <td><?php echo round(($proyeccionPrevia[2]['pago']*1.16)-
                ($proyeccionFutura[2]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes4txt">Mayo</span></th>
                <td><?php echo $_POST['mes4']?></td>
                <td><?php echo $consumoPosterior[3] ?></td>
                <td><?php echo round($proyeccionPrevia[3]['pago']*1.16, 2) ?></td>
                <td><?php echo round($proyeccionFutura[3]['pago']*1.16, 2) ?></td>
                <td><?php echo round(($proyeccionPrevia[3]['pago']*1.16)-
                ($proyeccionFutura[3]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes5txt">Junio</span></th>
                <td><?php echo $_POST['mes5']?></td>
                <td><?php echo $consumoPosterior[4] ?></td>
                <td><?php echo round($proyeccionPrevia[4]['pago']*1.16, 2) ?></td>
                <td><?php echo round($proyeccionFutura[4]['pago']*1.16, 2) ?></td>
                <td><?php echo round(($proyeccionPrevia[4]['pago']*1.16)-
                ($proyeccionFutura[4]['pago']*1.16), 2)?></td>
                </tr>
                <tr>
                <th scope="row"><span id="mes6txt">Julio</span></th>
                <td><?php echo $_POST['mes6']?></td>
                <td><?php echo $consumoPosterior[5] ?></td>
                <td><?php echo round($proyeccionPrevia[5]['pago']*1.16, 2) ?></td>
                <td><?php echo round($proyeccionFutura[5]['pago']*1.16, 2) ?></td>
                <td><?php echo round(($proyeccionPrevia[5]['pago']*1.16)-
                ($proyeccionFutura[5]['pago']*1.16), 2)?></td>
                </tr>
                <th scope="col">Total anual</th>
                <th scope="col"><?php echo $consumoPrevioAnual ." kWh" ?></th>
                <th scope="col"><?php echo $consumoFuturoAnual ." kWh"?></th>
                <th scope="col"><?php echo "$". round($totalAnualAnterior, 2) ?></th>
                <th scope="col"><?php echo "$". round($totalAnualPosterior, 2) ?></th>
                <th scope="col"><?php echo "$". round($totalFinal, 2)?></th>
                </tr>

            </thead>
        </table>
    </div>

    <?php endif; ?>

    <script>
        generarMeses("<?php echo $_POST['mes'] ?>","<?php echo $frecuencia ?>");
    </script>
    </body>
    
    </html>

    <?php 
    
    ?>