<?php 
    $host = 'localhost';
    $ConnectSeres = array("Database" => "ProyectSeres", "UID" => "S3res", "PWD" => "2024", "CharacterSet" => "UTF-8");

    $TheConexion = sqlsrv_connect($host, $ConnectSeres);

    // if ($TheConexion) {
    //         echo "Conexion Realizada!!";
    // }else {
    //         echo "Fallo en la conexion";
    // }

?>