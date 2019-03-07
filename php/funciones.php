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


    /**
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


    /**
     * Metodo para obtener un desglose del consumo por mes esperado
     * Retorna el desglose del consumo esperado
    */
    function consumoFuturo($consumoPorMes, $produccionMensual){

        $consumoPorMesFuturo = array();
        $AFavor = 0;
        $bolsaEnergia = 0;

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
     *Metodo para obtener el total anual mas IVA
    */
    function obtenerTotalAnualAnterior($consumoEnero, $consumoFebrero, $consumoMarzo, $consumoAbril, 
    $consumoMayo, $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, $consumoOctubre, 
    $consumoNoviembre, $consumoDiciembre){

    $total = ($consumoEnero['pago']*1.16)+($consumoFebrero['pago']*1.16)+($consumoMarzo['pago']*1.16)+
    ($consumoAbril['pago']*1.16)+($consumoMayo['pago']*1.16)+($consumoJunio['pago']*1.16)+
    ($consumoJulio['pago']*1.16)+($consumoAgosto['pago']*1.16)+($consumoSeptiembre['pago']*1.16)+
    ($consumoOctubre['pago']*1.16)+($consumoNoviembre['pago']*1.16)+($consumoDiciembre['pago']*1.16);


    return $total;
    }

    function comprobarSiEsAFavor($consumoFuturo){

        $AFavor = false;
        $bandera = 0;

        foreach ($consumoFuturo as $valor) {
            
            if ($valor == 0) {
                
                $bandera = $bandera + 1;
            }

        }

        if($bandera>0){

            $AFavor = true;

        }

        return $AFavor;
    }

?>