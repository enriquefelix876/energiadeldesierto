<?php

require_once('./cotizacion.php');
require_once('funciones1A.php');

//Variables globales
$titular= $_POST['titular'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$codigopostal = $_POST['codigopostal'];
$tarifa = $_POST['tarifa'];
$servicio = $_POST['servicio'];
$mes = $_POST['mes'];

$consumoPorMes = array("mes1" => $_POST['mes1'],"mes2" => $_POST['mes2'],"mes3" => $_POST['mes3'],
    "mes4" => $_POST['mes4'],"mes5" => $_POST['mes5'],"mes6" => $_POST['mes6'],"mes7" => $_POST['mes7'],
    "mes8" => $_POST['mes8'],"mes9" => $_POST['mes9'],"mes10" => $_POST['mes10'],"mes11" => $_POST['mes11'],
    "mes12" => $_POST['mes12']
);

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
$totalNoviembre = 0;
$totalDiciembre = 0;

$inicioVerano = "Marzo";

        //En caso de que el inicio de verano sea en Febrero
        if($inicioVerano=="Febrero"){
            //En caso de que el ultimo mes sea Enero del 2019
	        if($mes=="Enero"){
                              
	            $totalEnero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
                $totalFebrero = pagoMensualVerano20181A($consumoPorMes['mes2']);
	            $totalMarzo = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalAgosto = pagoMensualInvierno20181A($consumoPorMes['mes8']);
	            $totalSeptiembre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Febrero del 2019
	        if($mes=="Febrero"){
	
	            $totalFebrero = pagoMensualVerano20181A($consumoPorMes['mes1']);
	            $totalMarzo = pagoMensualVerano20181A($consumoPorMes['mes2']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalAgosto = pagoMensualInvierno20181A($consumoPorMes['mes7']);
	            $totalSeptiembre = pagoMensualInvierno20181A($consumoPorMes['mes8']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
                $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes12']);

	        }
	
	        //En caso de que el ultimo mes sea Marzo del 2019
	        if($mes=="Marzo"){
	
	            $totalMarzo = pagoMensualVerano20181A($consumoPorMes['mes1']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes2']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalAgosto = pagoMensualInvierno20181A($consumoPorMes['mes6']);
	            $totalSeptiembre = pagoMensualInvierno20181A($consumoPorMes['mes7']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes8']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes11']);
	            $totalFebrero = pagoMensualFebrero20191A($consumoPorMes['mes12'],100,50);
	        }
        }


        
    	//En caso de que el inicio de verano sea en Febrero
        if($inicioVerano=="Marzo"){
            //En caso de que el ultimo mes sea Enero del 2019
	        if($mes=="Enero"){
                              
	            $totalEnero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
                $totalFebrero = pagoMensualInvierno20181A($consumoPorMes['mes2']);
	            $totalMarzo = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes8']);
	            $totalSeptiembre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Febrero del 2019
	        if($mes=="Febrero"){
	
	            $totalFebrero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
	            $totalMarzo = pagoMensualVerano20181A($consumoPorMes['mes2']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalSeptiembre = pagoMensualInvierno20181A($consumoPorMes['mes8']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
                $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes12']);

	        }
	
	        //En caso de que el ultimo mes sea Marzo del 2019
	        if($mes=="Marzo"){
	
	            $totalMarzo = pagoMensualVerano20181A($consumoPorMes['mes1']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes2']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalSeptiembre = pagoMensualInvierno20181A($consumoPorMes['mes7']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes8']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes11']);
	            $totalFebrero = pagoMensualFebrero20191A($consumoPorMes['mes12'],100,50);
	        }
        }


        //En caso de que el inicio de verano sea en Abril
        if($inicioVerano=="Abril"){
            //En caso de que el ultimo mes sea Enero del 2019
	        if($mes=="Enero"){
                              
	            $totalEnero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
                $totalFebrero = pagoMensualInvierno20181A($consumoPorMes['mes2']);
	            $totalMarzo = pagoMensualInvierno20181A($consumoPorMes['mes3']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes8']);
	            $totalSeptiembre = pagoMensualVerano20181A($consumoPorMes['mes9']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Febrero del 2019
	        if($mes=="Febrero"){
	
	            $totalFebrero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
	            $totalMarzo = pagoMensualInvierno20181A($consumoPorMes['mes2']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalSeptiembre = pagoMensualVerano20181A($consumoPorMes['mes8']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
                $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes12']);

	        }
	
	        //En caso de que el ultimo mes sea Marzo del 2019
	        if($mes=="Marzo"){
	
	            $totalMarzo = pagoMensualInvierno20181A($consumoPorMes['mes1']);
	            $totalAbril = pagoMensualVerano20181A($consumoPorMes['mes2']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalSeptiembre = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalOctubre = pagoMensualInvierno20181A($consumoPorMes['mes8']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes11']);
	            $totalFebrero = pagoMensualFebrero20191A($consumoPorMes['mes12'],100,50);
	        }
        }



        //En caso de que el inicio de verano sea en Mayo
        if($inicioVerano=="Mayo"){
            //En caso de que el ultimo mes sea Enero del 2019
	        if($mes=="Enero"){
                              
	            $totalEnero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
                $totalFebrero = pagoMensualInvierno20181A($consumoPorMes['mes2']);
	            $totalMarzo = pagoMensualInvierno20181A($consumoPorMes['mes3']);
	            $totalAbril = pagoMensualInvierno20181A($consumoPorMes['mes4']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes8']);
	            $totalSeptiembre = pagoMensualVerano20181A($consumoPorMes['mes9']);
	            $totalOctubre = pagoMensualVerano20181A($consumoPorMes['mes10']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Febrero del 2019
	        if($mes=="Febrero"){
	
	            $totalFebrero = pagoMensualInvierno20181A($consumoPorMes['mes1']);
	            $totalMarzo = pagoMensualInvierno20181A($consumoPorMes['mes2']);
	            $totalAbril = pagoMensualInvierno20181A($consumoPorMes['mes3']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalSeptiembre = pagoMensualVerano20181A($consumoPorMes['mes8']);
	            $totalOctubre = pagoMensualVerano20181A($consumoPorMes['mes9']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes11']);
                $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes12']);

	        }
	
	        //En caso de que el ultimo mes sea Marzo del 2019
	        if($mes=="Marzo"){
	
	            $totalMarzo = pagoMensualInvierno20181A($consumoPorMes['mes1']);
	            $totalAbril = pagoMensualInvierno20181A($consumoPorMes['mes2']);
	            $totalMayo = pagoMensualVerano20181A($consumoPorMes['mes3']);
	            $totalJunio = pagoMensualVerano20181A($consumoPorMes['mes4']);
	            $totalJulio = pagoMensualVerano20181A($consumoPorMes['mes5']);
	            $totalAgosto = pagoMensualVerano20181A($consumoPorMes['mes6']);
	            $totalSeptiembre = pagoMensualVerano20181A($consumoPorMes['mes7']);
	            $totalOctubre = pagoMensualVerano20181A($consumoPorMes['mes8']);
	            $totalNoviembre = pagoMensualInvierno20181A($consumoPorMes['mes9']);
	            $totalDiciembre = pagoMensualInvierno20181A($consumoPorMes['mes10']);
	            $totalEnero = pagoMensualEnero20191A($consumoPorMes['mes11']);
	            $totalFebrero = pagoMensualFebrero20191A($consumoPorMes['mes12'],100,50);
	        }
        }
?>