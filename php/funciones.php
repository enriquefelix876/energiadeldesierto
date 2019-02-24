<?php 

    /*
    ---Metodo para obtener el pago mensual en Invierno---
    $consumoKWH = El total de KWH consumidos a lo largo del mes
    $rangoBasico = EL rango basico aplicado en verano
    $rangoIntermedio = El rango intermedio aplicado en verano
    $kwhBasico = Factor de multiplicacion de Kilowatts-hora
    $kwhIntermedio = Factor de multiplicacion de Kilowatts-hora
    $kwhExcedente = Factor de multiplicacion de Kilowatts-hora
    */
    function pagoMensualInvierno($consumoKWH, $rangoBasico, $rangoIntermedio, 
    $kwhBasico, $kwhIntermedio, $kwhExcedente){

        $pagoMensual = 0;

        //Si el consumo sobrepasa el rango basico
        if($consumoKWH>$rangoBasico){
    
            $pagoMensual = $kwhBasico*$rangoBasico;

            $consumoKWH = $consumoKWH-$rangoBasico;

            //Si el consumo sobrepasa el rango intermedio
            if($consumoKWH>$rangoIntermedio){

                $pagoMensual = $pagoMensual+$kwhIntermedio*$rangoIntermedio;

                $consumoKWH = $consumoKWH-$rangoIntermedio;

                //Si hay excedente de consumo
                if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$kwhExcedente*$consumoKWH;

                }
            
            //Si el consumo se encuentra entre el rango basico y el intermedio
            }else{
                $pagoMensual = $pagoMensual+$kwhIntermedio*$consumoKWH;

            }

        //Si el consumo no sobrepasa el basico
        }else{
            
            $pagoMensual = $kwhBasico*$consumoKWH;

        }


        return $pagoMensual;

    }

    function pagoMensualVerano($consumoKWH, $rangoBasico, $rangoIntermedioBajo, 
    $rangoIntermedioAlto, $kwhBasico, $kwhIntermedioBajo, 
    $kwhIntermedioAlto, $kwhExcedente){

        $pagoMensual = 0;

        //Si el consumo sobrepasa el rango basico
        if($consumoKWH>$rangoBasico){
                
            $pagoMensual = $kwhBasico*$rangoBasico;
            $consumoKWH = $consumoKWH-$rangoBasico;

            //Si el consumo sobrepasa el rango intermedio bajo
            if($consumoKWH>$rangoIntermedioBajo){

                $pagoMensual = $pagoMensual+$kwhIntermedioBajo*$rangoIntermedioBajo;
                $consumoKWH = $consumoKWH-$rangoIntermedioBajo;

                //Si el consumo sobrepasa el rango intermedio alto
                if($consumoKWH>$rangoIntermedioAlto){

                    //Aqui no se tomo en cuenta el rango intermedio alto para calcular el pago mensual
                    
                    //$pagoMensual = $pagoMensual+$kwhIntermedioAlto*$rangoIntermedioAlto;
                    $consumoKWH = $consumoKWH-$rangoIntermedioAlto;

                    //Si el consume excede el rango excedente
                    if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$kwhExcedente*$consumoKWH;

                }

                //Si el consumo se encuentra entra el rango intermedio bajo y el intermedio alto
                }else{

                    //Se elimina la suma del intermedio alto

                    //$pagoMensual = $pagoMensual+$kwhIntermedioAlto*$consumoKWH;
                }

            //Si el consumo se encuentra entre el rango basico y el intermedio bajo
            }else{

                $pagoMensual = $pagoMensual+$kwhIntermedioBajo*$consumoKWH;
            }
            
        //Si el consumo no sobrepasa el rango basico
        }else{

            $pagoMensual = $kwhBasico*$consumoKWH;

        }

        return $pagoMensual;

    }
    
    function desgloseConsumoPorMesInvierno($consumoKWH, $rangoBasico, $rangoIntermedio, 
    $kwhBasico, $kwhIntermedio, $kwhExcedente){

        $desglosePorMes = array(

            "basico" => 0,
            "intermedioBajo" => 0,
            "intermedioAlto" => 0,
            "excedente" => 0
        );


        //Si el consumo sobrepasa el rango basico
        if($consumoKWH>$rangoBasico){

            $consumoKWH = $consumoKWH-$rangoBasico;
            $desglosePorMes['basico'] = $rangoBasico;

            //Si el consumo sobrepasa el rango intermedio
            if($consumoKWH>$rangoIntermedio){

                $consumoKWH = $consumoKWH-$rangoIntermedio;
                $desglosePorMes['intermedioBajo'] = $rangoIntermedio;

                //Si hay excedente de consumo
                if($consumoKWH>0){

                    $desglosePorMes['excedente'] = $consumoKWH;

                }
            
            //Si el consumo se encuentra entre el rango basico y el intermedio
            }else{
                $desglosePorMes['intermedioBajo'] = $consumoKWH;
            }

        //Si el consumo no sobrepasa el basico
        }else{
            
            $desglosePorMes['basico'] = $consumoKWH;

        }


        return $desglosePorMes;
    }

    function desgloseConsumoPorMesVerano($consumoKWH, $rangoBasico, $rangoIntermedioBajo, 
    $rangoIntermedioAlto, $kwhBasico, $kwhIntermedioBajo, 
    $kwhIntermedioAlto, $kwhExcedente){

        $desglosePorMes = array(

            "basico" => 0,
            "intermedioBajo" => 0,
            "intermedioAlto" => 0,
            "excedente" => 0
        );

        //Si el consumo sobrepasa el rango basico
        if($consumoKWH>$rangoBasico){
                
            $consumoKWH = $consumoKWH-$rangoBasico;
            $desglosePorMes['basico'] = $rangoBasico;

            //Si el consumo sobrepasa el rango intermedio bajo
            if($consumoKWH>$rangoIntermedioBajo){

                $consumoKWH = $consumoKWH-$rangoIntermedioBajo;
                $desglosePorMes['intermedioBajo'] = $rangoIntermedioBajo;

                //Si el consumo sobrepasa el rango intermedio alto
                if($consumoKWH>$rangoIntermedioAlto){

                    $consumoKWH = $consumoKWH-$rangoIntermedioAlto;
                    $desglosePorMes['intermedioAlto'] = $rangoIntermedioAlto;

                    //Si el consume excede el rango excedente
                    if($consumoKWH>0){

                    $desglosePorMes['excedente'] = $consumoKWH;

                }

                //Si el consumo se encuentra entra el rango intermedio bajo y el intermedio alto
                }else{

                    $desglosePorMes['intermedioAlto'] = $consumoKWH;
                }

            //Si el consumo se encuentra entre el rango basico y el intermedio bajo
            }else{

                $desglosePorMes['intermedioBajo'] = $consumoKWH;
            }
            
        //Si el consumo no sobrepasa el rango basico
        }else{

            $desglosePorMes['basico'] = $consumoKWH;

        }

        return $desglosePorMes;


    }

    
?>