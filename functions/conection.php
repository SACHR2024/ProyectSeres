<?php 


    function conexionSqlsrv() {
        $host = 'localhost';
        $ConnectSeres = array("Database" => "ProyectSeres", "UID" => "S3res", "PWD" => "2024", "CharacterSet" => "UTF-8");

        $TheConexion = sqlsrv_connect($host, $ConnectSeres);

        return $TheConexion;
    }

    function conexionPDO(){
        $dataBase="sqlsrv: server=SACHR\SACHRDB; database=ProyectSeres";
        $dataUser="SACHR";
        $dataPass="3055";

        $toPDOConection = new PDO($dataBase, $dataUser, $dataPass);

        return $toPDOConection;
    }  
    

    // $host = 'localhost';
    // $ConnectSeres = array("Database" => "ProyectSeres", "UID" => "S3res", "PWD" => "2024", "CharacterSet" => "UTF-8");

    // $TheConexion = sqlsrv_connect($host, $ConnectSeres);
    

    //Conexion con PDO
    // $dataBase="sqlsrv: server=SACHR\SACHRDB; database=ProyectSeres";
    // $dataUser="S3res";
    // $dataPass="2024";

    // $toPDOConection = new PDO($dataBase, $dataUser, $dataPass);

