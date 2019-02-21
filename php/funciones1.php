<?php

    require_once('cotizar1.php');

    //Tarifas 2018
    $consumoBasico2018 = 0.793;
    $consumoIntermedio2018 = 0.956;
    $consumoExcedente2018 = 2.802;

    //Tarifas 2019
    $consumoBasicoEnero2019 = 0.796;
    $consumoIntermedioEnero2019 = 0.960;
    $consumoExcedenteEnero2019  = 2.813;

    $consumoBasicoFebrero2019 = 0.799;
    $consumoIntermedioFebrero2019 = 0.964;
    $consumoExcedenteFebrero2019  = 2.824;

    $consumoBasicoMarzo2019 = 0.802;
    $consumoIntermedioMarzo2019 = 0.968;
    $consumoExcedenteMarzo2019  = 2.835;


    function pagoFebrero2019($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasicoFebrero2019;
        global $consumoIntermedioFebrero2019;
        global $consumoExcedenteFebrero2019;
        
        //Si el consumo sobrepasa los 75 KWH
        if($consumoKWH>75){

            $pagoMensual = $consumoBasicoFebrero2019*75;

            $consumoKWH = $consumoKWH-75;

            //Si el consumo sobrepasa los 130 KWH
            if($consumoKWH>65){

                $pagoMensual = $pagoMensual+$consumoIntermedioFebrero2019*65;

                $consumoKWH = $consumoKWH-65;

                //Si el consume excede los 130 KWH
                if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$consumoExcedenteFebrero2019*$consumoKWH;

                }
            
            //Si el consumo se encuentra entre 75 y 130KWH
            }else{
                $pagoMensual = $pagoMensual+$consumoIntermedioFebrero2019*$consumoKWH;

            }

        //Si el consumo no sobrepasa los 75 KWH
        }else{
            
            $pagoMensual = $consumoBasicoFebrero2019*$consumoKWH;

        }

        return $pagoMensual;        
    }

    function pagoEnero2019($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasicoEnero2019;
        global $consumoIntermedioEnero2019;
        global $consumoExcedenteEnero2019;
        
        //Si el consumo sobrepasa los 75 KWH
        if($consumoKWH>75){

            $pagoMensual = $consumoBasicoEnero2019*75;

            $consumoKWH = $consumoKWH-75;

            //Si el consumo sobrepasa los 130 KWH
            if($consumoKWH>65){

                $pagoMensual = $pagoMensual+$consumoIntermedioEnero2019*65;

                $consumoKWH = $consumoKWH-65;

                //Si el consume excede los 130 KWH
                if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$consumoExcedenteEnero2019*$consumoKWH;

                }
            
            //Si el consumo se encuentra entre 75 y 130KWH
            }else{
                $pagoMensual = $pagoMensual+$consumoIntermedioEnero2019*$consumoKWH;

            }

        //Si el consumo no sobrepasa los 75 KWH
        }else{
            
            $pagoMensual = $consumoBasicoEnero2019*$consumoKWH;

        }

        return $pagoMensual;
    }

    function pagoMensual2018($consumoKWH){

        $pagoMensual = 0;
        global $consumoBasico2018;
        global $consumoIntermedio2018;
        global $consumoExcedente2018;
        
        //Si el consumo sobrepasa los 75 KWH
        if($consumoKWH>75){

            $pagoMensual = $consumoBasico2018*75;

            $consumoKWH = $consumoKWH-75;

            //Si el consumo sobrepasa los 130 KWH
            if($consumoKWH>65){

                $pagoMensual = $pagoMensual+$consumoIntermedio2018*65;

                $consumoKWH = $consumoKWH-65;

                //Si el consume excede los 130 KWH
                if($consumoKWH>0){

                    $pagoMensual = $pagoMensual+$consumoExcedente2018*$consumoKWH;

                }
            
            //Si el consumo se encuentra entre 75 y 130KWH
            }else{
                $pagoMensual = $pagoMensual+$consumoIntermedio2018*$consumoKWH;

            }

        //Si el consumo no sobrepasa los 75 KWH
        }else{
            
            $pagoMensual = $consumoBasico2018*$consumoKWH;

        }

        return $pagoMensual;
    }

?>