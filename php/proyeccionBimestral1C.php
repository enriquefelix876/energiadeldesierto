<?php 
    require_once('./cotizacion.php');
    require_once('funciones.php');
    //Variables globales
    $titular= $_POST['titular'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $frecuencia_pago = $_POST['frecuencia_pago'];
    $tarifa = $_POST['tarifa'];
    $servicio = $_POST['servicio'];
    $mes = $_POST['mes'];
    $consumoPorMes = array("mes1" => $_POST['mes1'],"mes2" => $_POST['mes2'],"mes3" => $_POST['mes3'],
        "mes4" => $_POST['mes4'],"mes5" => $_POST['mes5'],"mes6" => $_POST['mes6']
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
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 200, 0.793, 0.956, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 200, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
    }
    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Marzo"){
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 200, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 200, 0.793, 0.956, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
    }
    //En caso de que el verano inicie en Abril
    if($inicioVerano == "Abril"){
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 200, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 200, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
    }
    //En caso de que el verano inicie en Mayo
    if($inicioVerano == "Mayo"){
        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 150, 200, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 200, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
        }
        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 200, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){
            $consumoNoviembre = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoSeptiembre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJulio = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoMayo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 200, 0.793, 0.956, 2.802);
            $consumoMarzo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoEnero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){
            $consumoDiciembre = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 200, 0.793, 0.956, 2.802);
            $consumoOctubre = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAgosto = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoJunio = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 300, 300, 300, 0.697, 0.822, 1.050, 2.802);
            $consumoAbril = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 200, 0.793, 0.956, 2.802);
            $consumoFebrero = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 200, 0.793, 0.956, 2.802);
        }
    }
?>