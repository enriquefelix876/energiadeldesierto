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

    
    $inicioVerano = "Marzo";

        //En caso de que el verano inicie en Febrero
        if($inicioVerano == "Febrero"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            }
    
            if($mes == "Febrero"){
    
                //Consumo por mes
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }
    
    
            if($mes == "Marzo"){
    
                //Consumo por mes
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes8'], 75, 125, 0.793, 0.956, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }
    
    
        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Marzo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            }

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes9'], 75, 125, 0.793, 0.956, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Abril"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
            }

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes10'], 75, 125, 0.793, 0.956, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }


        }


        //En caso de que el verano inicie en Marzo
        if($inicioVerano == "Mayo"){

            //En caso de que el ultimo mes sea enero
            if($mes == "Enero"){

                //Consumo por mes
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 75, 125, 0.793, 0.956, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes12'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
            }

            if($mes == "Febrero"){

                //Consumo por mes
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 75, 125, 0.793, 0.956, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes11'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.793, 0.956, 2.802);
                
            }


            if($mes == "Marzo"){

                //Consumo por mes
                $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 75, 125, 0.793, 0.956, 2.802);
                $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 75, 125, 0.793, 0.956, 2.802);
                $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 75, 125, 0.793, 0.956, 2.802);
                $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes7'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes8'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes9'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoNoviembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes10'], 175, 225, 200, 0.697, 0.822, 1.050, 2.802);
                $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes11'], 75, 125, 0.793, 0.956, 2.802);
                $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes12'], 75, 125, 0.796, 0.960, 2.813);
                
            }


        }
?>