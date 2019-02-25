<?php 

    require_once('utilidades.php');

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dbprueba";
    $port = "3306";

    //String de conexion
    $conexion = new mysqli($server,$user,$password,$database,$port);
    if($conexion -> connect_errno){
        die($conexion -> connect_error);
    }

    //Guardar, Modificar, Eliminar
    function nonQuery($sqlstr, &$conexion =null){
        if(!$conexion)global $conexion;
        $result = $conexion->query($sqlstr);
        return $conexion -> affected_rows;
    }

    //Select
    function obtenerRegistros($sqlstr, &$conexion =null){
        if(!$conexion)global $conexion;
        $result = $conexion->query($sqlstr);
        
        $resultArray = array();
        foreach($result as $registros){

            $resultArray[] = $registros;
        }

        return $resultArray;
    }

    //UTF-8

    function convertirUTF8($array){

        array_walk_recursive($array, function(&$item, $key){

            if(!mb_detect_encoding($item,'utf-8',true)){

                $item = utf8_encode($item);
            }
        });
        return $array;
    }

?>