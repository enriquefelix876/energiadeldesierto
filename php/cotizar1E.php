

<?php 
	require_once('./cotizacion.php');
	require_once('funciones1E.php');
	
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
	
    $inicioVerano = "Mayo";

        //En caso de que el inicio de verano sea en Febrero
        if($inicioVerano=="Febrero"){
            //En caso de que el ultimo mes sea Enero del 2019
	        if($mes=="Enero"){
	
	            $totalEnero = pagoMensualInvierno2018($consumoPorMes['mes1']);
	            $totalFebrero = pagoMensualVerano2018($consumoPorMes['mes2']);
	            $totalMarzo = pagoMensualVerano2018($consumoPorMes['mes3']);
	            $totalAbril = pagoMensualVerano2018($consumoPorMes['mes4']);
	            $totalMayo = pagoMensualVerano2018($consumoPorMes['mes5']);
	            $totalJunio = pagoMensualVerano2018($consumoPorMes['mes6']);
	            $totalJulio = pagoMensualVerano2018($consumoPorMes['mes7']);
	            $totalAgosto = pagoMensualInvierno2018($consumoPorMes['mes8']);
	            $totalSeptiembre = pagoMensualInvierno2018($consumoPorMes['mes9']);
	            $totalOctubre = pagoMensualInvierno2018($consumoPorMes['mes10']);
	            $totalNoviembre = pagoMensualInvierno2018($consumoPorMes['mes11']);
	            $totalDiciembre = pagoMensualInvierno2018($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Febrero del 2019
	        if($mes=="Febrero"){
	
	            $totalFebrero = pagoMensualVerano2018($consumoPorMes['mes1']);
	            $totalMarzo = pagoMensualVerano2018($consumoPorMes['mes2']);
	            $totalAbril = pagoMensualVerano2018($consumoPorMes['mes3']);
	            $totalMayo = pagoMensuVerano2018($consumoPorMes['mes4']);
	            $totalJunio = pagoMensuVerano2018($consumoPorMes['mes5']);
	            $totalJulio = pagoMensuVerano2018($consumoPorMes['mes6']);
	            $totalAgosto = pagoMensualInvierno2018($consumoPorMes['mes7']);
	            $totalSeptiembre = pagoMensualInvierno2018($consumoPorMes['mes8']);
	            $totalOctubre = pagoMensualInvierno2018($consumoPorMes['mes9']);
	            $totalNoviembre = pagoMensualInvierno2018($consumoPorMes['mes10']);
	            $totalDiciembre = pagoMensualInvierno2018($consumoPorMes['mes11']);
	            $totalEnero = pagoMensualInvierno2018($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Marzo del 2019
	        if($mes=="Marzo"){
	
	            $totalMarzo = pagoMensualInvierno2018($consumoPorMes['mes1']);
	            $totalAbril = pagoMensualInvierno2018($consumoPorMes['mes2']);
	            $totalMayo = pagoMensualVerano2018($consumoPorMes['mes3']);
	            $totalJunio = pagoMensualVerano2018($consumoPorMes['mes4']);
	            $totalJulio = pagoMensualVerano2018($consumoPorMes['mes5']);
	            $totalAgosto = pagoMensualVerano2018($consumoPorMes['mes6']);
	            $totalSeptiembre = pagoMensualVerano2018($consumoPorMes['mes7']);
	            $totalOctubre = pagoMensualVerano2018($consumoPorMes['mes8']);
	            $totalNoviembre = pagoMensualVerano2018($consumoPorMes['mes9']);
	            $totalDiciembre = pagoMensualInvierno2018($consumoPorMes['mes10']);
	            $totalEnero = pagoMensualInvierno2018($consumoPorMes['mes11']);
	            $totalFebrero = pagoMensualInvierno2018($consumoPorMes['mes12']);
	        }
        }


        //En caso de que el inicio de verano sea en Mayo
        if($inicioVerano=="Mayo"){
	        //En caso de que el ultimo mes sea Enero del 2019
	        if($mes=="Enero"){
	
	            $totalEnero = pagoMensualInvierno2018($consumoPorMes['mes1']);
	            $totalFebrero = pagoMensualInvierno2018($consumoPorMes['mes2']);
	            $totalMarzo = pagoMensualInvierno2018($consumoPorMes['mes3']);
	            $totalAbril = pagoMensualInvierno2018($consumoPorMes['mes4']);
	            $totalMayo = pagoMensualVerano2018($consumoPorMes['mes5']);
	            $totalJunio = pagoMensualVerano2018($consumoPorMes['mes6']);
	            $totalJulio = pagoMensualVerano2018($consumoPorMes['mes7']);
	            $totalAgosto = pagoMensualVerano2018($consumoPorMes['mes8']);
	            $totalSeptiembre = pagoMensualVerano2018($consumoPorMes['mes9']);
	            $totalOctubre = pagoMensualVerano2018($consumoPorMes['mes10']);
	            $totalNoviembre = pagoMensualInvierno2018($consumoPorMes['mes11']);
	            $totalDiciembre = pagoMensualInvierno2018($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Febrero del 2019
	        if($mes=="Febrero"){
	
	            $totalFebrero = pagoMensualInvierno2018($consumoPorMes['mes1']);
	            $totalMarzo = pagoMensualInvierno2018($consumoPorMes['mes2']);
	            $totalAbril = pagoMensualInvierno2018($consumoPorMes['mes3']);
	            $totalMayo = pagoMensualVerano2018($consumoPorMes['mes4']);
	            $totalJunio = pagoMensualVerano2018($consumoPorMes['mes5']);
	            $totalJulio = pagoMensualVerano2018($consumoPorMes['mes6']);
	            $totalAgosto = pagoMensualVerano2018($consumoPorMes['mes7']);
	            $totalSeptiembre = pagoMensualVerano2018($consumoPorMes['mes8']);
	            $totalOctubre = pagoMensualVerano2018($consumoPorMes['mes9']);
	            $totalNoviembre = pagoMensualInvierno2018($consumoPorMes['mes10']);
	            $totalDiciembre = pagoMensualInvierno2018($consumoPorMes['mes11']);
	            $totalEnero = pagoMensualInvierno2018($consumoPorMes['mes12']);
	        }
	
	        //En caso de que el ultimo mes sea Marzo del 2019
	        if($mes=="Marzo"){
	
	            $totalMarzo = pagoMensualInvierno2018($consumoPorMes['mes1']);
	            $totalAbril = pagoMensualInvierno2018($consumoPorMes['mes2']);
	            $totalMayo = pagoMensualVerano2018($consumoPorMes['mes3']);
	            $totalJunio = pagoMensualVerano2018($consumoPorMes['mes4']);
	            $totalJulio = pagoMensualVerano2018($consumoPorMes['mes5']);
	            $totalAgosto = pagoMensualVerano2018($consumoPorMes['mes6']);
	            $totalSeptiembre = pagoMensualVerano2018($consumoPorMes['mes7']);
	            $totalOctubre = pagoMensualVerano2018($consumoPorMes['mes8']);
	            $totalNoviembre = pagoMensualVerano2018($consumoPorMes['mes9']);
	            $totalDiciembre = pagoMensualInvierno2018($consumoPorMes['mes10']);
	            $totalEnero = pagoMensualInvierno2018($consumoPorMes['mes11']);
	            $totalFebrero = pagoMensualInvierno2018($consumoPorMes['mes12']);
	        }
        }
            
	?>

