<?php 

    require_once(realpath(dirname(__FILE__) . '/../cotizacion.php'));
    require_once('funciones.php');
    
    
    $postBody = file_get_contents('php://input');
    $convertir = json_decode($postBody,true);
	
    $mes = $convertir[0]['mes'];
    
    $consumoPorMes = array("mes1" => $convertir[0]['mes1'],"mes2" => $convertir[0]['mes2'],
    "mes3" => $convertir[0]['mes3'],"mes4" => $convertir[0]['mes4'],"mes5" => $convertir[0]['mes5'],
    "mes6" => $convertir[0]['mes6'],"mes7" => $convertir[0]['mes7'],"mes8" => $convertir[0]['mes8'],
    "mes9" => $convertir[0]['mes9'],"mes10" => $convertir[0]['mes10'],"mes11" => $convertir[0]['mes11'],
    "mes12" => $convertir[0]['mes12']
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
	
    
    $inicioVerano = "Mayo";

    //En caso de que el verano inicie en Febrero
    if($inicioVerano == "Febrero"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
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
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
            
        }


    }


    //En caso de que el verano inicie en Abril
    if($inicioVerano == "Abril"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
            
        }


    }

    //En caso de que el verano inicie en Mayo
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
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes12'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 300, 450, 150, 0.583, 0.726, 0.948, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
            
        }


    }

?>