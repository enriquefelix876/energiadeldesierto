<?php 

    require_once('php/funciones.php');

    function proyeccionAhorros($tarifa){


        switch ($tarifa) {

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
    
        //Constante
        $produccionPromedio = 5;
        $capacidad = 2.4;
    
        //Obtener Promedio Diario
        $promedioDiario = obtenerPromedioDiario($consumoEnero, $consumoFebrero, $consumoMarzo, $consumoAbril, 
        $consumoMayo, $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, $consumoOctubre, 
        $consumoNoviembre, $consumoDiciembre);
        
        //Capacidad requerida obtenida a partir de sacar el promedio diario entre la produccion promedio
        $capacidadRequerida = $promedioDiario/$produccionPromedio;
    
        //Obtener Produccion diaria
        $produccionDiaria = $produccionPromedio * $capacidad;
    
        //Obtener Produccion Mensual
        $produccionMensual = $produccionDiaria * 30;
    
        //Desglose de produccion futura esperada
        $consumoFuturo = consumoFuturo($consumoPorMes, $produccionMensual);
    
    
        //Obtener el total anual aplicando el IVA
        $totalAnualAnterior = obtenerTotalAnualAnterior($consumoEnero, $consumoFebrero, $consumoMarzo, $consumoAbril, 
        $consumoMayo, $consumoJunio, $consumoJulio, $consumoAgosto, $consumoSeptiembre, $consumoOctubre, 
        $consumoNoviembre, $consumoDiciembre);
    
        switch ($tarifa) {
    
            case '1':
                require_once('php/proyeccion1Futuro.php');
            break;
    
            case '1A':
                require_once('php/proyeccion1AFuturo.php');
            break;
    
            case '1B':
            require_once('php/proyeccion1BFuturo.php');
            break;
    
            case '1C':
            require_once('php/proyeccion1ECuturo.php');
            break;
    
            case '1D':
            require_once('php/proyeccion1DFuturo.php');
            break;
    
            case '1E':
            require_once('php/proyeccion1EFuturo.php');
            break;
    
            case '1F':
            require_once('php/proyeccion1FFuturo.php');
            break;
    
            default:
            break;
        }
    
        //Obtener el total anual aplicando el IVA
        $totalAnualPosterior = obtenerTotalAnualAnterior($consumoEneroFuturo, $consumoFebreroFuturo, $consumoMarzoFuturo, $consumoAbrilFuturo, 
        $consumoMayoFuturo, $consumoJunioFuturo, $consumoJulioFuturo, $consumoAgostoFuturo, $consumoSeptiembreFuturo, $consumoOctubreFuturo, 
        $consumoNoviembreFuturo, $consumoDiciembreFuturo);
    
    
        $totalFinal = $totalAnualAnterior-$totalAnualPosterior;
    
        $proyeccionAhorro = array(

            "anterior" => $totalAnualAnterior,
            "posterior" => $totalAnualPosterior,
            "ahorro" => $totalFinal
        );

        return $proyeccionAhorro;

    }


?>