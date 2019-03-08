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
	
    
    $inicioVerano = "Febrero";

        //En caso de que el verano inicie en Febrero
        if($inicioVerano == "Febrero"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){
    
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
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.796, 0.960, 2.813);
            }
    
            if($mes == "Febrero"){
    
                //Consumo por mes
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 100, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.799, 0.964, 2.824);
            }
    
    
            if($mes == "Marzo"){
    
                //Consumo por mes
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 100, 0.793, 0.956, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.799, 0.964, 2.824);
                $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes12'], 150, 150, 150, 0.706, 0.831, 1.062, 2.835);
                
            }
    
    
        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Marzo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

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

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.799, 0.964, 2.824);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 100, 0.793, 0.956, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.799, 0.964, 2.824);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.802, 0.968, 2.835);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Abril"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

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

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.799, 0.964, 2.824);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 100, 0.793, 0.956, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.799, 0.964, 2.824);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.802, 0.968, 2.835);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Mayo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

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

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 100, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.799, 0.964, 2.824);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 100, 0.793, 0.956, 2.802);
                $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 100, 0.793, 0.956, 2.802);
                $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 150, 150, 150, 0.697, 0.822, 1.050, 2.802);
                $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 100, 0.793, 0.956, 2.802);
                $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 100, 0.796, 0.960, 2.813);
                $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 100, 0.799, 0.964, 2.824);
                $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 100, 0.802, 0.968, 2.835);
                
            }


        }

?>