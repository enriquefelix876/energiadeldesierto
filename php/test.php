<?php

    require_once('funciones.php');

    $frecuencia = "Bimestral";

    $desglose = array();

    $desglose = desgloseConsumoDacNormal(2000, 100.63, 4.206);

    print_r($desglose);

?>