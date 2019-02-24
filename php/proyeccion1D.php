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

    
    $inicioVerano = "Marzo";

        //En caso de que el verano inicie en Febrero
        if($inicioVerano == "Febrero"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            }
    
            if($mes == "Febrero"){
    
                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }
    
    
            if($mes == "Marzo"){
    
                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 125, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }
    
    
        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Marzo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            }

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Abril"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            }

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Mayo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 125, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes12'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
            }

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $totalDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }


        }
?>