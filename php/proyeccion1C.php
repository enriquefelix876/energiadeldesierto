<?php

    require_once('./cotizacion.php');
	require_once('funciones.php');
	
	//Variables globales
	$titular= $_POST['titular'];
	$estado = $_POST['estado'];
	$municipio = $_POST['municipio'];
	$codigopostal = $_POST['codigopostal'];
	$tarifa = $_POST['tarifa'];
	$servicio = $_POST['servicio'];
	$mes = $_POST['mes'];
	
	$consumoPorMes = array("mes1" => $_POST['mes1'],"mes2" => $_POST['mes2'],"mes3" => $_POST['mes3'],
	    "mes4" => $_POST['mes4'],"mes5" => $_POST['mes5'],"mes6" => $_POST['mes6'],"mes7" => $_POST['mes7'],
	    "mes8" => $_POST['mes8'],"mes9" => $_POST['mes9'],"mes10" => $_POST['mes10'],"mes11" => $_POST['mes11'],
	    "mes12" => $_POST['mes12']
    );
    
    $consumoEnero = array(

    );

    $consumoFebrero = array(

    );

    $consumoMarzo = array(

    );

    $consumoAbril = array(

    );

    $consumoMayo = array(

    );

    $consumoJunio = array(

    );

    $consumoJulio = array(

    );

    $consumoAgosto = array(

    );

    $consumoSeptiembre = array(

    );
    
    $consumoOctubre = array(

    );

    $consumoNoviembre = array(

    );

    $consumoDiciembre = array(

    );
	
	//Total a pagar por mes
	$totalEnero = 0;
	$totalFebrero = 0;
	$totalMarzo = 0;
	$totalAbril = 0;
	$totalMayo = 0;
	$totalJunio = 0;
	$totalJulio = 0;
	$totalAgosto = 0;
	$totalSeptiembre = 0;
	$totalOctubre = 0;
	$totalNoviembre = 0;
    $totalDiciembre = 0;
    
    $inicioVerano = "Febrero";

        //En caso de que el verano inicie en Febrero
        if($inicioVerano == "Febrero"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){
    
                //Pago por mes
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAbril = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $totalOctubre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
    
                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
            }
    
            if($mes == "Febrero"){
    
                //Pago por mes
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAbril = pagoMensualVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $totalOctubre = pagoMensualInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
    
                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
                
            }
    
    
            if($mes == "Marzo"){
    
                //Pago por mes
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAbril = pagoMensualVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $totalOctubre = pagoMensualInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);
    
                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);
                
            }
    
    
        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Marzo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Pago por mes
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
            }

            if($mes == "Febrero"){

                //Pago por mes
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);

                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Pago por mes
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);

                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Abril"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Pago por mes
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualInvierno($consumoPorMes['mes5'], 75, 100, 0.793, 0.956, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualVerano($consumoPorMes['mes11'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
            }

            if($mes == "Febrero"){

                //Pago por mes
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);

                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Pago por mes
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalMayo = pagoMensualVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalNoviembre = pagoMensualInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);

                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Mayo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Pago por mes
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualInvierno($consumoPorMes['mes5'], 75, 100, 0.793, 0.956, 2.802);
                $totalMayo = pagoMensualInvierno($consumoPorMes['mes6'], 75, 100, 0.793, 0.956, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualVerano($consumoPorMes['mes11'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalNoviembre = pagoMensualVerano($consumoPorMes['mes12'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 100, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes12'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
            }

            if($mes == "Febrero"){

                //Pago por mes
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $totalMayo = pagoMensualInvierno($consumoPorMes['mes5'], 75, 100, 0.793, 0.956, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalNoviembre = pagoMensualVerano($consumoPorMes['mes11'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);

                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 100, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Pago por mes
                $totalFebrero = pagoMensualInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $totalMarzo = pagoMensualInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $totalAbril = pagoMensualInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $totalMayo = pagoMensualInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $totalJunio = pagoMensualVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalJulio = pagoMensualVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalAgosto = pagoMensualVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalSeptiembre = pagoMensualVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalOctubre = pagoMensualVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalNoviembre = pagoMensualVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $totalDiciembre = pagoMensualInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $totalEnero = pagoMensualInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);

                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 100, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);
                
            }


        }
?>