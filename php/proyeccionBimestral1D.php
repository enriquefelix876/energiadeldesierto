<?php 
    require_once('./cotizacion.php');
    require_once('funciones.php');

function generarProyeccion1DBimestral($consumoPorMes){

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
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 250, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
    }
    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Marzo"){
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
    }
    //En caso de que el verano inicie en Abril
    if($inicioVerano == "Abril"){
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
    }
    //En caso de que el verano inicie en Mayo
    if($inicioVerano == "Mayo"){
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 150, 250, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 350, 450, 400, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
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

    $consumo = limitarMesesPrevios($consumoMensual, $mes);

    return $consumo;

}

?>