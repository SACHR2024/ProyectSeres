<?php 


    function conexionSqlsrv() {
        $host = 'localhost';
        $ConnectSeres = array("Database" => "ProyectSeres", "UID" => "SACHR", "PWD" => "3055", "CharacterSet" => "UTF-8");

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

