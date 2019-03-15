<?php 
    /*
    ---Metodo para obtener el pago mensual en Invierno---
    $consumoKWH = El total de KWH consumidos a lo largo del mes
    $rangoBasico = EL rango basico aplicado en verano
    $rangoIntermedio = El rango intermedio aplicado en verano
    $kwhBasico = Factor de multiplicacion de Kilowatts-hora
    $kwhIntermedio = Factor de multiplicacion de Kilowatts-hora
    $kwhExcedente = Factor de multiplicacion de Kilowatts-hora

    *Retorna un arreglo con el consumo basico, intermedio y excedente. Asi como el pago 
    del respectivo mes
    */
    function desgloseConsumoPorMesInvierno($consumoKWH, $rangoBasico, $rangoIntermedio, 
    $kwhBasico, $kwhIntermedio, $kwhExcedente){

        //Se establece el consumo minimo en 25 kWh
        if($consumoKWH<25){

            $consumoKWH = 25;
        }

        $desglosePorMes = array(

            "basico" => 0,
            "intermedioBajo" => 0,
            "intermedioAlto" => 0,
            "excedente" => 0,
            "pago" => 0
        );

        $pagoMensual = 0;


        //Si el consumo sobrepasa el rango basico
        if($consumoKWH>$rangoBasico){

            $pagoMensual = $kwhBasico*$rangoBasico;
            $consumoKWH = $consumoKWH-$rangoBasico;
            $desglosePorMes['basico'] = $rangoBasico;

            //Si el consumo sobrepasa el rango intermedio
            if($consumoKWH>$rangoIntermedio){

                $pagoMensual = $pagoMensual+$kwhIntermedio*$rangoIntermedio;
                $consumoKWH = $consumoKWH-$rangoIntermedio;
                $desglosePorMes['intermedioBajo'] = $rangoIntermedio;

                //Si hay excedente de consumo
                if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$kwhExcedente*$consumoKWH;
                    $desglosePorMes['excedente'] = $consumoKWH;

                }
            
            //Si el consumo se encuentra entre el rango basico y el intermedio
            }else{
                $pagoMensual = $pagoMensual+$kwhIntermedio*$consumoKWH;
                $desglosePorMes['intermedioBajo'] = $consumoKWH;
            }

        //Si el consumo no sobrepasa el basico
        }else{

            $pagoMensual = $kwhBasico*$consumoKWH;
            $desglosePorMes['basico'] = $consumoKWH;

        }

        $desglosePorMes['pago'] = $pagoMensual;
        return $desglosePorMes;
    }

    /*
    ---Metodo para obtener el pago mensual en Verano---
    $consumoKWH = El total de KWH consumidos a lo largo del mes
    $rangoBasico = EL rango basico aplicado en verano
    $rangoIntermedio = El rango intermedio aplicado en verano
    $kwhBasico = Factor de multiplicacion de Kilowatts-hora
    $kwhIntermedio = Factor de multiplicacion de Kilowatts-hora
    $kwhExcedente = Factor de multiplicacion de Kilowatts-hora

    *Retorna un arreglo con el consumo basico, intermedio bajo, intermedio y excedente. Asi como el pago 
    del respectivo mes
    */
    function desgloseConsumoPorMesVerano($consumoKWH, $rangoBasico, $rangoIntermedioBajo, 
    $rangoIntermedioAlto, $kwhBasico, $kwhIntermedioBajo, 
    $kwhIntermedioAlto, $kwhExcedente){

        //Se establece el consumo minimo en 25 kWh
        if($consumoKWH<25){

            $consumoKWH = 25;
        }

        $desglosePorMes = array(

            "basico" => 0,
            "intermedioBajo" => 0,
            "intermedioAlto" => 0,
            "excedente" => 0,
            "pago" => 0
        );

        $pagoMensual = 0;

        //Si el consumo sobrepasa el rango basico
        if($consumoKWH>$rangoBasico){

            $pagoMensual = $kwhBasico*$rangoBasico;    
            $consumoKWH = $consumoKWH-$rangoBasico;
            $desglosePorMes['basico'] = $rangoBasico;

            //Si el consumo sobrepasa el rango intermedio bajo
            if($consumoKWH>$rangoIntermedioBajo){

                $pagoMensual = $pagoMensual+$kwhIntermedioBajo*$rangoIntermedioBajo;
                $consumoKWH = $consumoKWH-$rangoIntermedioBajo;
                $desglosePorMes['intermedioBajo'] = $rangoIntermedioBajo;

                //Si el consumo sobrepasa el rango intermedio alto
                if($consumoKWH>$rangoIntermedioAlto){

                    //No se aplica el pago en el intermedio alto
                    $pagoMensual = $pagoMensual+$kwhIntermedioAlto*$rangoIntermedioAlto;
                    $consumoKWH = $consumoKWH-$rangoIntermedioAlto;
                    $desglosePorMes['intermedioAlto'] = $rangoIntermedioAlto;

                    //Si el consume excede el rango excedente
                    if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$kwhExcedente*$consumoKWH;
                    $desglosePorMes['excedente'] = $consumoKWH;

                }

                //Si el consumo se encuentra entra el rango intermedio bajo y el intermedio alto
                }else{

                    //No se aplica el pago en el intermedio alto
                    $pagoMensual = $pagoMensual+$kwhIntermedioAlto*$consumoKWH;
                    $desglosePorMes['intermedioAlto'] = $consumoKWH;
                }

            //Si el consumo se encuentra entre el rango basico y el intermedio bajo
            }else{

                $pagoMensual = $pagoMensual+$kwhIntermedioBajo*$consumoKWH;
                $desglosePorMes['intermedioBajo'] = $consumoKWH;
            }
            
        //Si el consumo no sobrepasa el rango basico
        }else{

            $pagoMensual = $kwhBasico*$consumoKWH;
            $desglosePorMes['basico'] = $consumoKWH;

        }

        $desglosePorMes['pago'] = $pagoMensual;
        return $desglosePorMes;


    }

    /*
     * Metodo para obtener la produccion promedio diaria mensual
    */
    function obtenerPromedioDiarioBimestral($consumos){

        $promedioDiario = 0;
        $consumoIntermedioBajo = 0;
        $consumoIntermedioAlto = 0;
        $consumoExcedente = 0;


    }

    /*
     * Metodo para obtener la produccion promedio 
    */
    function obtenerPromedioDiario($consumoEnero, $consumoFebrero, $consumoMarzo, $consumoAbril, $consumoMayo, 
    $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, $consumoOctubre, $consumoNoviembre, 
    $consumoDiciembre){

        $promedioDiario = 0;
        $consumoIntermedioBajo = 0;
        $consumoIntermedioAlto = 0;
        $consumoExcedente = 0;

        $consumoIntermedioBajo = $consumoEnero['intermedioBajo']+$consumoFebrero['intermedioBajo']+
        $consumoMarzo['intermedioBajo']+$consumoAbril['intermedioBajo']+$consumoMayo['intermedioBajo']+
        $consumoJunio['intermedioBajo']+$consumoJulio['intermedioBajo']+$consumoAgosto['intermedioBajo']+
        $consumoSeptiembre['intermedioBajo']+$consumoOctubre['intermedioBajo']+$consumoNoviembre['intermedioBajo']+
        $consumoDiciembre['intermedioBajo'];

        $consumoIntermedioAlto = $consumoEnero['intermedioAlto']+$consumoFebrero['intermedioAlto']+
        $consumoMarzo['intermedioAlto']+$consumoAbril['intermedioAlto']+$consumoMayo['intermedioAlto']+
        $consumoJunio['intermedioAlto']+$consumoJulio['intermedioAlto']+$consumoAgosto['intermedioAlto']+
        $consumoSeptiembre['intermedioAlto']+$consumoOctubre['intermedioAlto']+
        $consumoNoviembre['intermedioAlto']+$consumoDiciembre['intermedioAlto'];

        $consumoExcedente = $consumoEnero['excedente']+$consumoFebrero['excedente']+
        $consumoMarzo['excedente']+$consumoAbril['excedente']+$consumoMayo['excedente']+
        $consumoJunio['excedente']+$consumoJulio['excedente']+$consumoAgosto['excedente']+
        $consumoSeptiembre['excedente']+$consumoOctubre['excedente']+
        $consumoNoviembre['excedente']+$consumoDiciembre['excedente'];

        $promedioDiario = ($consumoIntermedioBajo+$consumoIntermedioAlto+$consumoExcedente)/365;

        return $promedioDiario;
    }


    /*
     * Metodo para obtener un desglose del consumo por mes esperado
     * Retorna el desglose del consumo esperado
    */
    function consumoFuturo($consumoPorMes, $produccionMensual, $frecuencia){

        $consumoPorMesFuturo = array();
        $AFavor = 0;
        $bolsaEnergia = 0;

        if($frecuencia=="Bimestral"){

            $produccionMensual*=2;
        }

        foreach ($consumoPorMes as $valor) {

            if($valor < $produccionMensual){

                $consumoPorMesFuturo[] = 0;

                //Valor temporal de produccion a favor del mes
                $AFavor = $produccionMensual-$valor;

                //Bolsa de energia acumulada
                $bolsaEnergia += $AFavor;

            }else{

                //Consumo temporal de comparacion
                $consumoTemporal = $valor-$produccionMensual;

                //En caso de que el consumo temporal sea menor o igual a la bolsa de energia acumulada
                if ($consumoTemporal<=$bolsaEnergia) {
                    
                    //El consumo del mes se iguala a 0
                    $consumoPorMesFuturo[] = 0;

                    //Se le resta el consumo temporal a la bolsa de energia acumulada
                    $bolsaEnergia-=$consumoTemporal;

                //En caso de que el consumo temporal sea mayor a la bolsa de energia acumulada
                } else {
                    
                    //El consumo del mes sera el consumo temporal menos la bolsa de energia acumulada
                    $consumoPorMesFuturo[] = $consumoTemporal-$bolsaEnergia;

                    //Se igual la bolsa de energia a 0
                    $bolsaEnergia = 0;
                }
                
            }
            
        }

        return $consumoPorMesFuturo;
    }

    
    /*
     *Metodo para obtener el total anual bimestral mas IVA
    */
    function obtenerTotalAnualAnteriorBimestral($mesesBimestralesOrdenados){

        $mesesOrdenados = $mesesBimestralesOrdenados;
        $total = 0;

        foreach ($mesesOrdenados as $valor) {
            
            $total += $valor['pago']*1.16;
            
        }

        return $total;
    }    

    /*
     *Metodo para obtener el total anual mas IVA
    */
    function obtenerTotalAnualAnterior($proyeccionPrevia){

        $total = 0;
        $proyeccionMensual = $proyeccionPrevia;

        foreach ($proyeccionPrevia as $valor) {
            
            $total+=$valor['pago']*1.16;
        }

    return $total;
    }

    /**
     * Metodo para ordenar los meses desglosados segun el ultimo periodo facturado
     * Retorna un arreglo de meses ordenados
     */
    function ordenarConsumo($proyeccionPrevia, $ultimoMes){

        $mesesOrdenados = array();

        switch ($ultimoMes) {

            case 'Diciembre':

                $mesesOrdenados[] = $proyeccionPrevia[0]; $mesesOrdenados[] = $proyeccionPrevia[1]; 
                $mesesOrdenados[] = $proyeccionPrevia[2]; $mesesOrdenados[] = $proyeccionPrevia[3]; 
                $mesesOrdenados[] = $proyeccionPrevia[4]; $mesesOrdenados[] = $proyeccionPrevia[5]; 
                $mesesOrdenados[] = $proyeccionPrevia[6]; $mesesOrdenados[] = $proyeccionPrevia[7];
                $mesesOrdenados[] = $proyeccionPrevia[8]; $mesesOrdenados[] = $proyeccionPrevia[9]; 
                $mesesOrdenados[] = $proyeccionPrevia[10]; $mesesOrdenados[] = $proyeccionPrevia[11]; 
                
            break;
                
            case 'Enero':

                $mesesOrdenados[] = $proyeccionPrevia[1]; $mesesOrdenados[] = $proyeccionPrevia[2]; 
                $mesesOrdenados[] = $proyeccionPrevia[3]; $mesesOrdenados[] = $proyeccionPrevia[4];
                $mesesOrdenados[] = $proyeccionPrevia[5]; $mesesOrdenados[] = $proyeccionPrevia[6]; 
                $mesesOrdenados[] = $proyeccionPrevia[7]; $mesesOrdenados[] = $proyeccionPrevia[8]; 
                $mesesOrdenados[] = $proyeccionPrevia[9]; $mesesOrdenados[] = $proyeccionPrevia[10]; 
                $mesesOrdenados[] = $proyeccionPrevia[11]; $mesesOrdenados[] = $proyeccionPrevia[0]; 

            break;

            case 'Febrero':

                $mesesOrdenados[] = $proyeccionPrevia[2]; $mesesOrdenados[] = $proyeccionPrevia[3]; 
                $mesesOrdenados[] = $proyeccionPrevia[4]; $mesesOrdenados[] = $proyeccionPrevia[5]; 
                $mesesOrdenados[] = $proyeccionPrevia[6]; $mesesOrdenados[] = $proyeccionPrevia[7];
                $mesesOrdenados[] = $proyeccionPrevia[8]; $mesesOrdenados[] = $proyeccionPrevia[9];
                $mesesOrdenados[] = $proyeccionPrevia[10]; $mesesOrdenados[] = $proyeccionPrevia[11];
                $mesesOrdenados[] = $proyeccionPrevia[0]; $mesesOrdenados[] = $proyeccionPrevia[1]; 

            break;

            case 'Marzo':

                $mesesOrdenados[] = $proyeccionPrevia[3]; $mesesOrdenados[] = $proyeccionPrevia[4]; 
                $mesesOrdenados[] = $proyeccionPrevia[5]; $mesesOrdenados[] = $proyeccionPrevia[6]; 
                $mesesOrdenados[] = $proyeccionPrevia[7]; $mesesOrdenados[] = $proyeccionPrevia[8]; 
                $mesesOrdenados[] = $proyeccionPrevia[9]; $mesesOrdenados[] = $proyeccionPrevia[10]; 
                $mesesOrdenados[] = $proyeccionPrevia[11]; $mesesOrdenados[] = $proyeccionPrevia[0]; 
                $mesesOrdenados[] = $proyeccionPrevia[1]; $mesesOrdenados[] = $proyeccionPrevia[2]; 
                    
            break;

            case 'Abril':

                $mesesOrdenados[] = $proyeccionPrevia[4]; $mesesOrdenados[] = $proyeccionPrevia[5]; 
                $mesesOrdenados[] = $proyeccionPrevia[6]; $mesesOrdenados[] = $proyeccionPrevia[7]; 
                $mesesOrdenados[] = $proyeccionPrevia[8]; $mesesOrdenados[] = $proyeccionPrevia[9]; 
                $mesesOrdenados[] = $proyeccionPrevia[10]; $mesesOrdenados[] = $proyeccionPrevia[11]; 
                $mesesOrdenados[] = $proyeccionPrevia[0]; $mesesOrdenados[] = $proyeccionPrevia[1]; 
                $mesesOrdenados[] = $proyeccionPrevia[2]; $mesesOrdenados[] = $proyeccionPrevia[3]; 

            break;

            }


        return $mesesOrdenados;

    }

    function asignarIndiceFuturo($consumoPosterior, $frecuencia){

        if ($frecuencia=="Mensual") {
            $consumoFuturo = array(
                "mes1" => $consumoPosterior[0], "mes2" => $consumoPosterior[1], 
                "mes3" => $consumoPosterior[2], "mes4" => $consumoPosterior[3], 
                "mes5" => $consumoPosterior[4], "mes6" => $consumoPosterior[5], 
                "mes7" => $consumoPosterior[6], "mes8" => $consumoPosterior[7], 
                "mes9" => $consumoPosterior[8], "mes10" => $consumoPosterior[9], 
                "mes11" => $consumoPosterior[10], "mes12" => $consumoPosterior[11], 
            );
        }else{
            $consumoFuturo = array(
                "mes1" => $consumoPosterior[0], "mes2" => $consumoPosterior[1], 
                "mes3" => $consumoPosterior[2], "mes4" => $consumoPosterior[3], 
                "mes5" => $consumoPosterior[4], "mes6" => $consumoPosterior[5] 
            );

        }
        

        return $consumoFuturo;
    }


    function limitarMesesPrevios($consumoMensual, $mes){

        $mesesOrdenados = array();

        switch ($mes) {

            case 'Diciembre':

                $mesesOrdenados[] = $consumoMensual[8];
                $mesesOrdenados[] = $consumoMensual[6];
                $mesesOrdenados[] = $consumoMensual[4];
                $mesesOrdenados[] = $consumoMensual[2];
                $mesesOrdenados[] = $consumoMensual[0];
                $mesesOrdenados[] = $consumoMensual[10];
                
                break;

            case 'Enero':

                $mesesOrdenados[] = $consumoMensual[9];
                $mesesOrdenados[] = $consumoMensual[7];
                $mesesOrdenados[] = $consumoMensual[5];
                $mesesOrdenados[] = $consumoMensual[3];
                $mesesOrdenados[] = $consumoMensual[1];
                $mesesOrdenados[] = $consumoMensual[11];
                
                break;

            case 'Febrero':

                $mesesOrdenados[] = $consumoMensual[10];
                $mesesOrdenados[] = $consumoMensual[8];
                $mesesOrdenados[] = $consumoMensual[6];
                $mesesOrdenados[] = $consumoMensual[4];
                $mesesOrdenados[] = $consumoMensual[2];
                $mesesOrdenados[] = $consumoMensual[0];
            
                break;

            case 'Marzo':

                $mesesOrdenados[] = $consumoMensual[11];
                $mesesOrdenados[] = $consumoMensual[9];
                $mesesOrdenados[] = $consumoMensual[7];
                $mesesOrdenados[] = $consumoMensual[5];
                $mesesOrdenados[] = $consumoMensual[3];
                $mesesOrdenados[] = $consumoMensual[1];
                
                break;

            case 'Abril':

                $mesesOrdenados[] = $consumoMensual[0];
                $mesesOrdenados[] = $consumoMensual[10];
                $mesesOrdenados[] = $consumoMensual[8];
                $mesesOrdenados[] = $consumoMensual[6];
                $mesesOrdenados[] = $consumoMensual[4];
                $mesesOrdenados[] = $consumoMensual[2];
                
                break;
            
            
        }

        return $mesesOrdenados;
    }

    function consumoAnual($consumoAnual){

        $consumo = 0;

        foreach ($consumoAnual as $valor) {
            
            $consumo+=$valor;

        }

        return $consumo;

    }

?>