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

    echo "Enero: "; print_r($consumoEnero); echo "<br>";
    echo "Febrero: "; print_r($consumoFebrero); echo "<br>";
    echo "Marzo: "; print_r($consumoMarzo); echo "<br>";
    echo "Abril: "; print_r($consumoAbril); echo "<br>";
    echo "Mayo: "; print_r($consumoMayo); echo "<br>";
    echo "Junio: "; print_r($consumoJunio); echo "<br>";
    echo "Julio: "; print_r($consumoJulio); echo "<br>";
    echo "Agosto: "; print_r($consumoAgosto); echo "<br>";
    echo "Septiembre: "; print_r($consumoSeptiembre); echo "<br>";
    echo "Octubre: "; print_r($consumoOctubre); echo "<br>";
    echo "Noviembre: "; print_r($consumoNoviembre); echo "<br>";
    echo "Diciembre: "; print_r($consumoDiciembre); echo "<br>";

?>