<?php 
    switch ($_POST['tarifa']) {

        case '1':
            require_once('php/proyeccion1.php');
        break;

        case '1A':
        require_once('php/proyeccion1A.php');
        break;

        case '1B':
        require_once('php/proyeccion1B.php');
        break;

        case '1C':
        require_once('php/proyeccion1C.php');
        break;

        case '1D':
        require_once('php/proyeccion1C.php');
        break;

        case '1E':
        require_once('php/proyeccion1E.php');
        break;

        case '1F':
        require_once('php/proyeccion1F.php');
        break;

        default:
        break;
    }

    echo $totalDiciembre."<br>";
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
    echo $totalNoviembre."<br><br>";

    echo $consumoEnero['intermedioBajo']+$consumoFebrero['intermedioBajo']+$consumoMarzo['intermedioBajo']+
    $consumoMayo['intermedioBajo']+$consumoJunio['intermedioBajo']+$consumoJulio['intermedioBajo']+
    $consumoAgosto['intermedioBajo']+$consumoSeptiembre['intermedioBajo']+$consumoOctubre['intermedioBajo']+
    $consumoNoviembre['intermedioBajo']+$consumoDiciembre['intermedioBajo']+$consumoAbril['intermedioBajo'];

?>