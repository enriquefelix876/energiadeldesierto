<?php
   switch ($_POST['tarifa']) {
       case '1E':
           require_once('php/cotizar1E.php');
           require_once('php/funciones1E.php');
       break;
   }

  echo "Enero: ".$totalEnero."<br>";
  echo "Febrero: ".$totalFebrero."<br>";
  echo "Marzo: ".$totalMarzo."<br>";
  echo "Abril: ".$totalAbril."<br>";

  echo "Mayo: ".$totalMayo."<br>";
  echo "Junio: ".$totalJunio."<br>";
  echo "Julio: ".$totalJulio."<br>";
  echo "Agosto: ".$totalAgosto."<br>";
  echo "Septiembre: ".$totalSeptiembre."<br>";
  echo "Octubre: ".$totalOctubre."<br>";
 
  echo "Noviembre: ".$totalNoviembre."<br>";
  echo "Diciembre: ".$totalDiciembre."<br>";


   //Meses (Estodo Futuro)
   $MesAhorro1;
   $MesAhorro2;
   $MesAhorro3;
   $MesAhorro4;
   $MesAhorro5;
   $MesAhorro6;
   $MesAhorro7;
   $MesAhorro8;
   $MesAhorro9;
   $MesAhorro10;
   $MesAhorro11;
   $MesAhorro12;

   $intermedio = 240;
   $intermedioAlto = 150;
   $alto = 90;
   $produccionPromedio = 5;
   $capacidadKw = 2.4;

   //promedio diario (intermedio + intermedioAlto + alto)/365
   $promedioDiario = ($intermedio+$intermedioAlto+$alto)/365;
  
   //Capacidad [kW]
   $capacidadRequerida = $promedioDiario/$produccionPromedio;

   //Area Requerida [m2]
   $areaRequerida = ($capacidadKw/0.3)*(0.992*1.96);

   //precio[MXO]
   $precio = (2.4/0.3) * 8000;

   //Prod. Diaria [kWh]
   $produccionDiaria = $produccionPromedio * 2.4;

   //Prod. Mensual [kWh]
   $produccionMensual = $produccionDiaria * 30;


   //Meses aplicando ahorro - columna ahorro total[kWh]
   $mesAhorro1E = array();

   foreach ($consumoPorMes as $valor) {

        if ($valor < $produccionMensual) {

           $mesAhorro1E[] = 0;
           
       }else{

           $mesAhorro1E[] = $valor - $produccionMensual;
       }
   }
       print_r($mesAhorro1E);
  
       echo "<br>";

   /*
   //Columna Basico [kWh]
   //Limite de kWh rango basico
   $limiteInvierno1E = 75;    
   $basicoInvierno1E = array();

   foreach ($mesAhorro1E as $valor) {
       if ($valor > $limiteInvierno1E) {

           $basicoInvierno1E[] = 75;
       }else{

           $basicoInvierno1E[] = $valor;
       }
   }

   print_r($basicoInvierno1E);
*/

   //en caso de que el verano inicie en febrero
   $InicioVerano = "Febrero";

   if ($mesInicioVeranoAhorro=="Febrero") {
       if($mes=="Enero"){
    
           $basicoAhorro = pagoMensualInvierno2018($consumoPorMes['mes1']);
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

   }
  


  

?>