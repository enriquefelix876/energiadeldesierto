<?php

    require_once('cotizar1E.php');  

        //Tarifas de Invierno 2017
        $consumoBasicoInvierno2017 = 0.793;
        $consumoInterInvierno2017 = 0.956;
        $consumoExcedenteInvierno2017 = 2.802;
        
        //Tarifas de Verano 2017
        $consumoBasicoVerano2017 = 0.583;
        $consumoInterBajoVerano2017 = 0.726;
        $consumoInterAltoVerano2017 = 0.948;
        $consumoExcedenteVerano2017 = 2.802;
    
        //Tarifas de Invierno 2018
        $consumoBasicoInvierno2018 = 0.793;
        $consumoInterInvierno2018 = 0.956;
        $consumoExcedenteInvierno2018 = 2.802;
    
        //Tarifas de Verano 2018
        $consumoBasicoVerano2018 = 0.583;
        $consumoInterBajoVerano2018 = 0.726;
        $consumoInterAltoVerano2018 = 0.948;
        $consumoExcedenteVerano2018 = 2.802;
    
        //Tarifas de Invierno 2019
        $consumoBasicoInvierno2019 = 0.796;
        $consumoInterInvierno2019 = 0.960;
        $consumoExcedenteInvierno2019 = 2.813;
        
        //Tarifas de Verano 2019
        $consumoBasicoVerano2019 = 0.593;
        $consumoInterBajoVerano2019 = 0.741;
        $consumoInterAltoVerano2019 = 0.968;
        $consumoExcedenteVerano2019 = 2.857;


        function pagoMensualInvierno2019($consumoKWH){

            $pagoMensual = 0;
            global $consumoBasicoInvierno2019;
            global $consumoInterInvierno2019;
            global $consumoExcedenteInvierno2019;
            
            //Si el consumo sobrepasa los 75 KWH
            if($consumoKWH>75){
    
                $pagoMensual = $consumoBasicoInvierno2019*75;
    
                $consumoKWH = $consumoKWH-75;
    
                //Si el consumo sobrepasa los 200 KWH
                if($consumoKWH>125){
    
                    $pagoMensual = $pagoMensual+$consumoInterInvierno2019*125;
    
                    $consumoKWH = $consumoKWH-125;
    
                    //Si el consume excede los 200 KWH
                    if($consumoKWH>0){
    
                        $pagoMensual = $pagoMensual+$consumoExcedenteInvierno2019*$consumoKWH;
    
                    }
                
                //Si el consumo se encuentra entre 75 y 200KWH
                }else{
                    $pagoMensual = $pagoMensual+$consumoInterInvierno2019*$consumoKWH;
    
                }
    
            //Si el consumo no sobrepasa los 75 KWH
            }else{
                
                $pagoMensual = $consumoBasicoInvierno2019*$consumoKWH;
    
            }
    
            return $pagoMensual;
        }


        function pagoMensualVerano2019($consumoKWH){

            $pagoMensual = 0;
            global $consumoBasicoVerano2019;
            global $consumoInterBajoVerano2019;
            global $consumoInterAltoVerano2019;
            global $consumoExcedenteVerano2019;
    
            //Si el consumo sobrepasa los 300 KWH
            if($consumoKWH>300){
                
                $pagoMensual = $consumoBasicoVerano2019*300;
                $consumoKWH = $consumoKWH-300;
    
                //Si el consumo sobrepasa los 750 KWH
                if($consumoKWH>450){
    
                    $pagoMensual = $pagoMensual+$consumoInterBajoVerano2019*450;
                    $consumoKWH = $consumoKWH-450;
    
                    //Si el consumo sobrepasa los 900KWH
                    if($consumoKWH>150){
    
                        $pagoMensual = $pagoMensual+$consumoInterAltoVerano2019*150;
                        $consumoKWH = $consumoKWH-150;
    
                        //Si el consume excede los 900 KWH
                        if($consumoKWH>0){
    
                        $pagoMensual = $pagoMensual+$consumoExcedenteVerano2019*$consumoKWH;
    
                    }
    
                    //Si el consumo se encuentra entra 750KWH y 900KWH
                    }else{
    
                        $pagoMensual = $pagoMensual+$consumoInterAltoVerano2019*$consumoKWH;
                    }
    
                //Si el consumo se encuentra entre 300KWH y 750KWH
                }else{
    
                    $pagoMensual = $pagoMensual+$consumoInterBajoVerano2019*$consumoKWH;
                }
                
            //Si el consumo no sobrepasa los 300 KWH
            }else{
    
                $pagoMensual = $consumoBasicoVerano2019*$consumoKWH;
    
            }
    
            return $pagoMensual;
        }


    function pagoMensualInvierno2018($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasicoInvierno2018;
        global $consumoInterInvierno2018;
        global $consumoExcedenteInvierno2018;
        
        //Si el consumo sobrepasa los 75 KWH
        if($consumoKWH>75){

            $pagoMensual = $consumoBasicoInvierno2018*75;

            $consumoKWH = $consumoKWH-75;

            //Si el consumo sobrepasa los 200 KWH
            if($consumoKWH>125){

                $pagoMensual = $pagoMensual+$consumoInterInvierno2018*125;

                $consumoKWH = $consumoKWH-125;

                //Si el consume excede los 200 KWH
                if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$consumoExcedenteInvierno2018*$consumoKWH;

                }
            
            //Si el consumo se encuentra entre 75 y 200KWH
            }else{
                $pagoMensual = $pagoMensual+$consumoInterInvierno2018*$consumoKWH;

            }

        //Si el consumo no sobrepasa los 75 KWH
        }else{
            
            $pagoMensual = $consumoBasicoInvierno2018*$consumoKWH;

        }

        return $pagoMensual;
    }

    function pagoMensualVerano2018($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasicoVerano2018;
        global $consumoInterBajoVerano2018;
        global $consumoInterAltoVerano2018;
        global $consumoExcedenteVerano2018;

        //Si el consumo sobrepasa los 300 KWH
        if($consumoKWH>300){
            
            $pagoMensual = $consumoBasicoVerano2018*300;
            $consumoKWH = $consumoKWH-300;

            //Si el consumo sobrepasa los 750 KWH
            if($consumoKWH>450){

                $pagoMensual = $pagoMensual+$consumoInterBajoVerano2018*450;
                $consumoKWH = $consumoKWH-450;

                //Si el consumo sobrepasa los 900KWH
                if($consumoKWH>150){

                    $pagoMensual = $pagoMensual+$consumoInterAltoVerano2018*150;
                    $consumoKWH = $consumoKWH-150;

                    //Si el consume excede los 900 KWH
                    if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$consumoExcedenteVerano2018*$consumoKWH;

                }

                //Si el consumo se encuentra entra 750KWH y 900KWH
                }else{

                    $pagoMensual = $pagoMensual+$consumoInterAltoVerano2018*$consumoKWH;
                }

            //Si el consumo se encuentra entre 300KWH y 750KWH
            }else{

                $pagoMensual = $pagoMensual+$consumoInterBajoVerano2018*$consumoKWH;
            }
            
        //Si el consumo no sobrepasa los 300 KWH
        }else{

            $pagoMensual = $consumoBasicoVerano2018*$consumoKWH;

        }

        return $pagoMensual;
    }

?>