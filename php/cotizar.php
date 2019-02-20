<?php 

    require_once('./cotizacion.php');

    //Variables globales
    $titular= $_POST['titular'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $codigopostal = $_POST['codigopostal'];
    $tarifa = $_POST['tarifa'];
    $servicio = $_POST['servicio'];
    $mes = $_POST['mes'];

    $consumoPorMes = array(
        "mes1" => $_POST['mes1'],
        "mes2" => $_POST['mes2'],
        "mes3" => $_POST['mes3'],
        "mes4" => $_POST['mes4'],
        "mes5" => $_POST['mes5'],
        "mes6" => $_POST['mes6'],
        "mes7" => $_POST['mes7'],
        "mes8" => $_POST['mes8'],
        "mes9" => $_POST['mes9'],
        "mes10" => $_POST['mes10'],
        "mes11" => $_POST['mes11'],
        "mes12" => $_POST['mes12'],
    );

    //Tarifas de Invierno 2017
    $consumoBasicoNoVerano2017 = 0.793;
    $consumoInterNoVerano2017 = 0.956;
    $consumoExcedenteNoVerano2018 = 2.802;
    
    //Tarifas de Verano 2017
    $consumoBasicoVerano2017 = 0.583;
    $consumoInterBajoVerano2017 = 0.726;
    $consumoInterAltoVerano2017 = 0.948;
    $consumoExcedenteVerano2017 = 2.802;

    //Tarifas de Invierno 2018
    $consumoBasicoNoVerano2018 = 0.793;
    $consumoInterNoVerano2018 = 0.956;
    $consumoExcedenteNoVerano2018 = 2.802;
    
    //Tarifas de Verano 2018
    $consumoBasicoVerano2018 = 0.583;
    $consumoInterBajoVerano2018 = 0.726;
    $consumoInterAltoVerano2018 = 0.948;
    $consumoExcedenteVerano2018 = 2.802;

    //Tarifas de Invierno 2019
    $consumoBasicoNoVerano2018 = 0.796;
    $consumoInterNoVerano2018 = 0.960;
    $consumoExcedenteNoVerano2018 = 2.813;
    
    //Tarifas de Verano 2019
    $consumoBasicoVerano2018 = 0.593;
    $consumoInterBajoVerano2018 = 0.741;
    $consumoInterAltoVerano2018 = 0.968;
    $consumoExcedenteVerano2018 = 2.857;

    //Total a pagar por mes
    $totalEnero = 0;
    $totalFebrero = 0;
    $totalMarzo = 0;
    $totalAbril = 0;
    $totalMayo = 0;
    $totalJunio = 0;
    $totalJulio = 0;
    $totalAgosto = 0;
    $totalSeptiembre = 0;
    $totalOctubre = 0;
    $totalNoviemre = 0;
    $totalDiciembre = 0;

    switch($tarifa){

        case "1":

        break;

        case "1A":

        break;

        case "1B":

        break;

        case "1C":

        break;

        case "1D":

        break;

        case "1E":

            if($mes=="Enero"){

                //Si el consumo sobrepasa los 75 KWH
                if($mes1>75){

                    $totalEnero = $importeBasicoEnero*75;

                    echo "Consumo basico = $".$importeBasicoEnero*75;
                    echo "<br>";

                    $mes1 = $mes1-75;

                    //Si el consumo sobrepasa los 200 KWH
                    if($mes1>125){

                        $totalEnero = $totalEnero+$importeInterEnero*125;
                        echo "Consumo Intermedio = $".$importeInterEnero*125;
                        echo "<br>";
                        $mes1 = $mes1-125;

                        //Si el consume excede los 200 KWH
                        if($mes1>0){

                            $totalEnero = $totalEnero+$importeExcedenteEnero*$mes1;
                            echo "Consumo Excedente = $".$importeExcedenteEnero*$mes1;
                            echo "<br>";

                        }
                    
                    //Si el consumo se encuentra entre 75 y 200KWH
                    }else{
                        $totalEnero = $totalEnero+$importeInterEnero*$mes1;
                        echo "Consumo Intermedio = $".$importeInterEnero*$mes1;
                        echo "<br>";
                    }

                //Si el consumo no sobrepasa los 75 KWH
                }else{
                    
                    $totalEnero = $importeBasicoEnero*$mes1;
                    echo "Consumo basico = $".$importeBasicoEnero*$mes1;
                    echo "<br>";

                }
                
            }

        break;

        case "1F":

        break;
        
    }
?>