<?php 

    require_once('cotizar1B.php');

    //Tarifas del 2018
    $consumoBasicoInvierno2018 = 0.793;
    $consumoIntermedioInvierno2018 = 0.956;
    $consumoExcedenteInvierno2018 = 2.802;

    $consumoBasicoVerano2018 = 0.697;
    $consumoIntermedioVerano2018 = 0.822;
    $consumoExcedenteVerano2018 = 2.802;   

    //Tarifas del 2019
    $consumoBasicoEnero2019 = 0.796;
    $consumoIntermedioEnero2019 = 0.960;
    $consumoExcedenteEnero2019 = 2.813;

    $consumoBasicoFebrero2019 = 0.703;
    $consumoIntermedioFebrero2019 = 0.828;
    $consumoExcedenteFebrero2019 = 2.824;

    $consumoBasicoMarzo2019 = 0.706;
    $consumoIntermedioMarzo2019 = 0.831;
    $consumoExcedenteMarzo2019 = 2.835;

    
    function pagoMensualFebrero20191B($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasicoFebrero2019;
        global $consumoIntermedioFebrero2019;
        global $consumoExcedenteFebrero2019;

                //Si el consumo sobrepasa los 100 KWH
                if($consumoKWH>75){

                    $pagoMensual = $consumoBasicoFebrero2019*75;
        
                    $consumoKWH = $consumoKWH-75;
        
                    //Si el consumo sobrepasa los 150 KWH
                    if($consumoKWH>100){
        
                        $pagoMensual = $pagoMensual+$consumoIntermedioFebrero2019*100;
        
                        $consumoKWH = $consumoKWH-100;
        
                        //Si el consume excede los 150 KWH
                        if($consumoKWH>0){
        
                            $pagoMensual = $pagoMensual+$consumoExcedenteFebrero2019*$consumoKWH;
        
                        }
                    
                    //Si el consumo se encuentra entre 75 y 150KWH
                    }else{
                        $pagoMensual = $pagoMensual+$consumoIntermedioFebrero2019*$consumoKWH;
        
                    }
        
                //Si el consumo no sobrepasa los 75 KWH
                }else{
                    
                    $pagoMensual = $consumoBasicoFebrero2019*$consumoKWH;
        
                }
        
                return $pagoMensual;

    }


    function pagoMensualEnero20191B($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasicoEnero2019;
        global $consumoIntermedioEnero2019;
        global $consumoExcedenteEnero2019;

                //Si el consumo sobrepasa los 100 KWH
                if($consumoKWH>75){

                    $pagoMensual = $consumoBasicoEnero2019*75;
        
                    $consumoKWH = $consumoKWH-75;
        
                    //Si el consumo sobrepasa los 150 KWH
                    if($consumoKWH>100){
        
                        $pagoMensual = $pagoMensual+$consumoIntermedioEnero2019*100;
        
                        $consumoKWH = $consumoKWH-100;
        
                        //Si el consume excede los 150 KWH
                        if($consumoKWH>0){
        
                            $pagoMensual = $pagoMensual+$consumoExcedenteEnero2019*$consumoKWH;
        
                        }
                    
                    //Si el consumo se encuentra entre 75 y 150KWH
                    }else{
                        $pagoMensual = $pagoMensual+$consumoIntermedioEnero2019*$consumoKWH;
        
                    }
        
                //Si el consumo no sobrepasa los 75 KWH
                }else{
                    
                    $pagoMensual = $consumoBasicoEnero2019*$consumoKWH;
        
                }
        
                return $pagoMensual;

    }


    function pagoMensualVerano20181B($consumoKWH){

        $pagoMensual = 0;
            global $consumoBasicoVerano2018;
            global $consumoIntermedioVerano2018;
            global $consumoExcedenteVerano2018;
            
            //Si el consumo sobrepasa los 75 KWH
            if($consumoKWH>125){
    
                $pagoMensual = $consumoBasicoVerano2018*125;
    
                $consumoKWH = $consumoKWH-125;
    
                //Si el consumo sobrepasa los 175 KWH
                if($consumoKWH>100){
    
                    $pagoMensual = $pagoMensual+$consumoIntermedioVerano2018*100;
    
                    $consumoKWH = $consumoKWH-100;
    
                    //Si el consume excede los 175 KWH
                    if($consumoKWH>0){
    
                        $pagoMensual = $pagoMensual+$consumoExcedenteInvierno2018*$consumoKWH;
    
                    }
                
                //Si el consumo se encuentra entre 100 y 175KWH
                }else{
                    $pagoMensual = $pagoMensual+$consumoIntermedioVerano2018*$consumoKWH;
    
                }
    
            //Si el consumo no sobrepasa los 100 KWH
            }else{
                
                $pagoMensual = $consumoBasicoVerano2018*$consumoKWH;
    
            }
    
            return $pagoMensual;
    }


    function pagoMensualInvierno20181B($consumoKWH){

            $pagoMensual = 0;
            global $consumoBasicoInvierno2018;
            global $consumoIntermedioInvierno2018;
            global $consumoExcedenteInvierno2018;
            
            //Si el consumo sobrepasa los 75 KWH
            if($consumoKWH>75){
    
                $pagoMensual = $consumoBasicoInvierno2018*75;
    
                $consumoKWH = $consumoKWH-75;
    
                //Si el consumo sobrepasa los 175 KWH
                if($consumoKWH>100){
    
                    $pagoMensual = $pagoMensual+$consumoIntermedioInvierno2018*100;
    
                    $consumoKWH = $consumoKWH-100;
    
                    //Si el consume excede los 175 KWH
                    if($consumoKWH>0){
    
                        $pagoMensual = $pagoMensual+$consumoExcedenteInvierno2018*$consumoKWH;
    
                    }
                
                //Si el consumo se encuentra entre 100 y 175KWH
                }else{
                    $pagoMensual = $pagoMensual+$consumoIntermedioInvierno2018*$consumoKWH;
    
                }
    
            //Si el consumo no sobrepasa los 100 KWH
            }else{
                
                $pagoMensual = $consumoBasicoInvierno2018*$consumoKWH;
    
            }
    
            return $pagoMensual;
    }

?>