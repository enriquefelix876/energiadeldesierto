<?php 
    switch ($_POST['tarifa']) {
        case '1E':
            require_once('php/proyeccion1E.php');
        break;

        case '1':
            require_once('php/cotizar1.php');
        break;

        case '1A':
        require_once('php/cotizar1A.php');
        break;

        case '1B':
        require_once('php/cotizar1B.php');
        break;

        default:
        break;
    }

    echo $totalDiciembre*1.16."<br>";
    echo $totalEnero*1.16."<br>";
    echo $totalFebrero*1.16."<br>";
    echo $totalMarzo*1.16."<br>";
    echo $totalAbril*1.16."<br>";
    echo $totalMayo*1.16."<br>";
    echo $totalJunio*1.16."<br>";
    echo $totalJulio*1.16."<br>";
    echo $totalAgosto*1.16."<br>";
    echo $totalSeptiembre*1.16."<br>";
    echo $totalOctubre*1.16."<br>";
    echo $totalNoviembre*1.16."<br>";

    echo $consumoEnero['intermedioBajo']+$consumoFebrero['intermedioBajo']+$consumoMarzo['intermedioBajo']+
    $consumoMayo['intermedioBajo']+$consumoJunio['intermedioBajo']+$consumoJulio['intermedioBajo']+
    $consumoAgosto['intermedioBajo']+$consumoSeptiembre['intermedioBajo']+$consumoOctubre['intermedioBajo']+
    $consumoNoviembre['intermedioBajo']+$consumoDiciembre['intermedioBajo']+$consumoAbril['intermedioBajo'];

?>