<?php 

require_once('./cotizacion.php');
require_once('funciones.php');

//Variables globales
$titular= $_POST['titular'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$frecuencia_pago = $_POST['frecuencia_pago'];
$tarifa = $_POST['tarifa'];
$servicio = $_POST['servicio'];
$mes = $_POST['mes'];

$consumoPorMes = array("mes1" => $consumoFuturo[0], "mes2" => $consumoFuturo[1], "mes3" => $consumoFuturo[2],
"mes4" => $consumoFuturo[3], "mes5" =>$consumoFuturo[4], "mes6" => $consumoFuturo[5]
);

$consumoEneroFuturo = array(

);

$consumoFebreroFuturo = array(

);

$consumoMarzoFuturo = array(

);

$consumoAbrilFuturo = array(

);

$consumoMayoFuturo = array(

);

$consumoJunioFuturo = array(

);

$consumoJulioFuturo = array(

);

$consumoAgostoFuturo = array(

);

$consumoSeptiembreFuturo = array(

);

$consumoOctubreFuturo = array(

);

$consumoNoviembreFuturo = array(

);

$consumoDiciembreFuturo = array(

);


$inicioVerano = "Mayo";

    //En caso de que el verano inicie en Febrero
    if($inicioVerano == "Febrero"){

        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){

            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){

            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){

            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 250, 0.793, 0.956, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){

            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }


    }


    //En caso de que el verano inicie en Marzo
    if($inicioVerano == "Marzo"){

        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){

            $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){

            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){

            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){

            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes2'], 150, 250, 0.793, 0.956, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes5'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }


    }

    //En caso de que el verano inicie en Abril
    if($inicioVerano == "Abril"){

        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){

            $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){

            $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){

            $consumoNoviembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){

            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }


    }

    //En caso de que el verano inicie en Mayo
    if($inicioVerano == "Mayo"){

        //En caso de que el ultimo mes sea Diciembre
        if($mes == "Diciembre"){

            $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes3'], 150, 250, 0.793, 0.956, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoNoviembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes6'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
        }

        //En caso de que el ultimo mes sea Enero
        if($mes == "Enero"){

            $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Febrero
        if($mes == "Febrero"){

            $consumoNoviembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes1'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoSeptiembreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJulioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoMayoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes4'], 150, 250, 0.793, 0.956, 2.802);
            $consumoMarzoFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoEneroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }

        //En caso de que el ultimo mes sea Marzo
        if($mes == "Marzo"){

            $consumoDiciembreFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes1'], 150, 250, 0.793, 0.956, 2.802);
            $consumoOctubreFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes2'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAgostoFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes3'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoJunioFuturo = desgloseConsumoPorMesVerano($consumoPorMes['mes4'], 600, 900, 300, 0.583, 0.726, 0.948, 2.802);
            $consumoAbrilFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes5'], 150, 250, 0.793, 0.956, 2.802);
            $consumoFebreroFuturo = desgloseConsumoPorMesInvierno($consumoPorMes['mes6'], 150, 250, 0.793, 0.956, 2.802);
        }


    }
    

?>