<?php
header("Content-Type: application/json; charset=UTF-8");

require_once('php/cotizacion.php');

if(isset($_GET['url'])){

    $var = $_GET['url'];

    if($_SERVER['REQUEST_METHOD']=='POST'){


        if (json_last_error()==0) {

            switch ($var) {
                case "cotizar";

                    $datos = proyeccionAhorros("1E");

                    print_r(json_encode($datos));

                    http_response_code(200);
                break;
                default;
            }
        }else{
            http_response_code(400);
        }   

    }else{

        http_response_code(405);
    }

}else{

    //metadata


}

?>