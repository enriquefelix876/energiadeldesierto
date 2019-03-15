<?php 

    require_once('./cotizacion.php');
	require_once('funciones.php');

function generarProyeccion1($consumoPorMes){

    global $mes;
    
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
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.799, 0.964, 2.824);
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);
        }


    }

    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Marzo"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.799, 0.964, 2.824);
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);
        }


    }


    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Abril"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.799, 0.964, 2.824);
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.802, 0.968, 2.835);            
        }


    }

    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Mayo"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.799, 0.964, 2.824);
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunio = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);
        }


    }

    $consumoMensual = array();

    $consumoMensual[] = $consumoEnero;
    $consumoMensual[] = $consumoFebrero;
    $consumoMensual[] = $consumoMarzo;
    $consumoMensual[] = $consumoAbril;
    $consumoMensual[] = $consumoMayo;
    $consumoMensual[] = $consumoJunio;
    $consumoMensual[] = $consumoJulio;
    $consumoMensual[] = $consumoAgosto;
    $consumoMensual[] = $consumoSeptiembre;
    $consumoMensual[] = $consumoOctubre;
    $consumoMensual[] = $consumoNoviembre;
    $consumoMensual[] = $consumoDiciembre;

    return $consumoMensual;
}


?>