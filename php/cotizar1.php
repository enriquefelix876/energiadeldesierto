<?php

    require_once('./cotizacion.php');
	require_once('funciones1.php');
	
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
	
	//Total a pagar por mesro
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
    
    //En caso de que el ultimo mes sea Enero del 2019
    if($mes=="Enero"){
	
        $totalEnero = pagoMensual2018($consumoPorMes['mes1']);
        $totalFebrero = pagoMensual2018($consumoPorMes['mes2']);
        $totalMarzo = pagoMensual2018($consumoPorMes['mes3']);
        $totalAbril = pagoMensual2018($consumoPorMes['mes4']);
        $totalMayo = pagoMensual2018($consumoPorMes['mes5']);
        $totalJunio = pagoMensual2018($consumoPorMes['mes6']);
        $totalJulio = pagoMensual2018($consumoPorMes['mes7']);
        $totalAgosto = pagoMensual2018($consumoPorMes['mes8']);
        $totalSeptiembre = pagoMensual2018($consumoPorMes['mes9']);
        $totalOctubre = pagoMensual2018($consumoPorMes['mes10']);
        $totalNoviembre = pagoMensual2018($consumoPorMes['mes11']);
        $totalDiciembre = pagoMensual2018($consumoPorMes['mes12']);
    }

    //En caso de que el ultimo mes sea Febrero del 2019
    if($mes=="Febrero"){
	
        $totalFebrero= pagoMensual2018($consumoPorMes['mes1']);
        $totalMarzo = pagoMensual2018($consumoPorMes['mes2']);
        $totalAbril = pagoMensual2018($consumoPorMes['mes3']);
        $totalMayo = pagoMensual2018($consumoPorMes['mes4']);
        $totalJunio = pagoMensual2018($consumoPorMes['mes5']);
        $totalJulio = pagoMensual2018($consumoPorMes['mes6']);
        $totalAgosto = pagoMensual2018($consumoPorMes['mes7']);
        $totalSeptiembre = pagoMensual2018($consumoPorMes['mes8']);
        $totalOctubre = pagoMensual2018($consumoPorMes['mes9']);
        $totalNoviembre = pagoMensual2018($consumoPorMes['mes10']);
        $totalDiciembre = pagoMensual2018($consumoPorMes['mes11']);
        $totalEnero = pagoEnero2019($consumoPorMes['mes12']);
    }

    //En caso de que el ultimo mes sea Marzo del 2019
    if($mes=="Marzo"){
	
        $totalMarzo= pagoMensual2018($consumoPorMes['mes1']);
        $totalAbril = pagoMensual2018($consumoPorMes['mes2']);
        $totalMayo = pagoMensual2018($consumoPorMes['mes3']);
        $totalJunio = pagoMensual2018($consumoPorMes['mes4']);
        $totalJulio = pagoMensual2018($consumoPorMes['mes5']);
        $totalAgosto = pagoMensual2018($consumoPorMes['mes6']);
        $totalSeptiembre = pagoMensual2018($consumoPorMes['mes7']);
        $totalOctubre = pagoMensual2018($consumoPorMes['mes8']);
        $totalNoviembre = pagoMensual2018($consumoPorMes['mes9']);
        $totalDiciembre = pagoMensual2018($consumoPorMes['mes10']);
        $totalEnero = pagoEnero2019($consumoPorMes['mes11']);
        $totalFebrero = pagoFebrero2019($consumoPorMes['mes12']);
    }
    
?>