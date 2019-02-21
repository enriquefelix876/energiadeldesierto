<?php 
    switch ($_POST['tarifa']) {
        case '1E':
            require_once('php/cotizar1E.php');
        break;
    }

   echo $totalEnero."<br>";
   echo $totalFebrero."<br>";
   echo $totalMarzo."<br>";
   echo $totalAbril."<br>";

   echo $totalMayo."<br>";
   echo $totalJunio."<br>";
   echo $totalJulio."<br>";
   echo $totalAgosto."<br>";
   echo $totalSeptiembre."<br>";
   echo $totalOctubre."<br>";
   
   echo $totalNoviembre."<br>";
   echo $totalDiciembre."<br>";

?>