<?php

    require_once('./cotizacion.php');
    require_once('funciones.php');

    function generarProyeccionDAC($consumoPorMes){

    global $mes;
    global $estado;

    $region = obtenerRegion($_POST['estado']);

    //2018
    $cargoFijoEnero2018 = 100.63;
    $cargoFijoFebrero2018 = 100.77;
    $cargoFijoMarzo2018 = 102.24;
    $cargoFijoAbril2018 = 102.45;
    $cargoFijoMayo2018 = 102.79;
    $cargoFijoJunio2018 = 102.80;
    $cargoFijoJulio2018 = 104.77;
    $cargoFijoAgosto2018 = 106.68;
    $cargoFijoSeptiembre2018 = 105.62;
    $cargoFijoOctubre2018 = 105.17;
    $cargoFijoNoviembre2018 = 105.64;
    $cargoFijoDiciembre2018 = 105.82;

    //2019
    $cargoFijoEnero2019 = 107.58;
    $cargoFijoFebrero2019 = 107.92;
    $cargoFijoMarzo2019 = 107.37;
    $cargoFijoAbril2019 = 107.37;

    $cargoPorKWH = array();
    $cargoPorKWH = generarCargosPorKWH($region, $estado);
    
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

    //Si los estados no son Baja California o Baja California Sur
    if($estado!="Baja California" or $estado!="Baja California Sur"){

        //En caso de que el ultimo mes sea enero
        if($mes == "Enero"){
        
            $consumoFebrero = desgloseConsumoDacNormal($consumoPorMes["mes1"], $cargoFijoFebrero2018, $cargoPorKWH[1]);
            $consumoMarzo = desgloseConsumoDacNormal($consumoPorMes["mes2"], $cargoFijoMarzo2018, $cargoPorKWH[2]);
            $consumoAbril = desgloseConsumoDacNormal($consumoPorMes["mes3"], $cargoFijoAbril2018, $cargoPorKWH[3]);
            $consumoMayo = desgloseConsumoDacNormal($consumoPorMes["mes4"], $cargoFijoMayo2018, $cargoPorKWH[4]);
            $consumoJunio = desgloseConsumoDacNormal($consumoPorMes["mes5"], $cargoFijoJunio2018, $cargoPorKWH[5]);
            $consumoJulio = desgloseConsumoDacNormal($consumoPorMes["mes6"], $cargoFijoJulio2018, $cargoPorKWH[6]);
            $consumoAgosto = desgloseConsumoDacNormal($consumoPorMes["mes7"], $cargoFijoAgosto2018, $cargoPorKWH[7]);
            $consumoSeptiembre = desgloseConsumoDacNormal($consumoPorMes["mes8"], $cargoFijoSeptiembre2018, $cargoPorKWH[8]);
            $consumoOctubre = desgloseConsumoDacNormal($consumoPorMes["mes9"], $cargoFijoOctubre2018, $cargoPorKWH[9]);
            $consumoNoviembre = desgloseConsumoDacNormal($consumoPorMes["mes10"], $cargoFijoNoviembre2018, $cargoPorKWH[10]);
            $consumoDiciembre = desgloseConsumoDacNormal($consumoPorMes["mes11"], $cargoFijoDiciembre2018, $cargoPorKWH[11]);
            $consumoEnero = desgloseConsumoDacNormal($consumoPorMes["mes12"], $cargoFijoEnero2018, $cargoPorKWH[12]);
        }


        //En caso de que el ultimo mes sea febrero
        if($mes == "Febrero"){

            $consumoMarzo = desgloseConsumoDacNormal($consumoPorMes["mes1"], $cargoFijoMarzo2018, $cargoPorKWH[2]);
            $consumoAbril = desgloseConsumoDacNormal($consumoPorMes["mes2"], $cargoFijoAbril2018, $cargoPorKWH[3]);
            $consumoMayo = desgloseConsumoDacNormal($consumoPorMes["mes3"], $cargoFijoMayo2018, $cargoPorKWH[4]);
            $consumoJunio = desgloseConsumoDacNormal($consumoPorMes["mes4"], $cargoFijoJunio2018, $cargoPorKWH[5]);
            $consumoJulio = desgloseConsumoDacNormal($consumoPorMes["mes5"], $cargoFijoJulio2018, $cargoPorKWH[6]);
            $consumoAgosto = desgloseConsumoDacNormal($consumoPorMes["mes6"], $cargoFijoAgosto2018, $cargoPorKWH[7]);
            $consumoSeptiembre = desgloseConsumoDacNormal($consumoPorMes["mes7"], $cargoFijoSeptiembre2018, $cargoPorKWH[8]);                
            $consumoOctubre = desgloseConsumoDacNormal($consumoPorMes["mes8"], $cargoFijoOctubre2018, $cargoPorKWH[9]);
            $consumoNoviembre = desgloseConsumoDacNormal($consumoPorMes["mes9"], $cargoFijoNoviembre2018, $cargoPorKWH[10]);
            $consumoDiciembre = desgloseConsumoDacNormal($consumoPorMes["mes10"], $cargoFijoDiciembre2018, $cargoPorKWH[11]);
            $consumoEnero = desgloseConsumoDacNormal($consumoPorMes["mes11"], $cargoFijoEnero2018, $cargoPorKWH[12]);
            $consumoFebrero = desgloseConsumoDacNormal($consumoPorMes["mes12"], $cargoFijoFebrero2018, $cargoPorKWH[13]);
        }

        //En caso de que el ultimo mes sea marzo
        if($mes == "Marzo"){

            $consumoAbril = desgloseConsumoDacNormal($consumoPorMes["mes1"], $cargoFijoAbril2018, $cargoPorKWH[3]);
            $consumoMayo = desgloseConsumoDacNormal($consumoPorMes["mes2"], $cargoFijoMayo2018, $cargoPorKWH[4]);
            $consumoJunio = desgloseConsumoDacNormal($consumoPorMes["mes3"], $cargoFijoJunio2018, $cargoPorKWH[5]);
            $consumoJulio = desgloseConsumoDacNormal($consumoPorMes["mes4"], $cargoFijoJulio2018, $cargoPorKWH[6]);
            $consumoAgosto = desgloseConsumoDacNormal($consumoPorMes["mes5"], $cargoFijoAgosto2018, $cargoPorKWH[7]);
            $consumoSeptiembre = desgloseConsumoDacNormal($consumoPorMes["mes6"], $cargoFijoSeptiembre2018, $cargoPorKWH[8]);                
            $consumoOctubre = desgloseConsumoDacNormal($consumoPorMes["mes7"], $cargoFijoOctubre2018, $cargoPorKWH[9]);
            $consumoNoviembre = desgloseConsumoDacNormal($consumoPorMes["mes8"], $cargoFijoNoviembre2018, $cargoPorKWH[10]);
            $consumoDiciembre = desgloseConsumoDacNormal($consumoPorMes["mes9"], $cargoFijoDiciembre2018, $cargoPorKWH[11]);
            $consumoEnero = desgloseConsumoDacNormal($consumoPorMes["mes10"], $cargoFijoEnero2018, $cargoPorKWH[12]);
            $consumoFebrero = desgloseConsumoDacNormal($consumoPorMes["mes11"], $cargoFijoFebrero2018, $cargoPorKWH[13]);
            $consumoMarzo = desgloseConsumoDacNormal($consumoPorMes["mes12"], $cargoFijoMarzo2018, $cargoPorKWH[14]);
        }


    }else{


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