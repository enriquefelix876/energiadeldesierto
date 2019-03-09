<?php 

    require_once('./cotizacion.php');
	require_once('funciones.php');
	
	//Variables globales
	$titular= $_POST['titular'];
	$estado = $_POST['estado'];
	$municipio = $_POST['municipio'];
	$tarifa = $_POST['tarifa'];
	$servicio = $_POST['servicio'];
	$mes = $_POST['mes'];
	
	$consumoPorMes = array("mes1" => $consumoFuturo[0],"mes2" => $consumoFuturo[1],"mes3" => $consumoFuturo[2],
    "mes4" => $consumoFuturo[3],"mes5" => $consumoFuturo[4],"mes6" => $consumoFuturo[5],"mes7" => $consumoFuturo[6],
    "mes8" => $consumoFuturo[7],"mes9" => $consumoFuturo[8],"mes10" => $consumoFuturo[9],"mes11" => $consumoFuturo[10],
    "mes12" => $consumoFuturo[11]);
    
    $consumoEneroFuturo = array(

    );

    $consumoFebreroFuturo = array(

    );

    $consumoMarzoFuturo = array(

    );

    $consumoAbrilFuturo = array(

    );

    $consumoMayoFuturo = array(

    );

    $consumoJunioFuturo = array(

    );

    $consumoJulioFuturo = array(

    );

    $consumoAgostoFuturo = array(

    );

    $consumoSeptiembreFuturo = array(

    );
    
    $consumoOctubreFuturo = array(

    );

    $consumoNoviembreFuturo = array(

    );

    $consumoDiciembreFuturo = array(

    );
    
    $inicioVerano = "Mayo";

    //En caso de que el verano inicie en Febrero
    if($inicioVerano == "Febrero"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.799, 0.964, 2.824);
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);
        }


    }


    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Marzo"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.799, 0.964, 2.824);            
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);
        }


    }


    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Abril"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.799, 0.964, 2.824);            
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);            
        }


    }

    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Mayo"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){

            //Consumo por mes
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.796, 0.960, 2.813);
        }

        if($mes == "Febrero"){

            //Consumo por mes
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.799, 0.964, 2.824);
        }


        if($mes == "Marzo"){

            //Consumo por mes
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 65, 0.793, 0.956, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 65, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 65, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 65, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 65, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes7'], 75, 65, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 65, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 65, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 65, 0.796, 0.960, 2.813);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 65, 0.799, 0.964, 2.824);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 65, 0.802, 0.968, 2.835);            
        }


    }

?>