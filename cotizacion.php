<?php 
    switch ($_POST['tarifa']) {
        case '1E':
            require_once('php/cotizar1E.php');
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

?>