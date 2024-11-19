<?php

    include("conection.php");

    $upId = 0;
    $upName = '';
    $upPass = '';
    $upmail = '';
    $upBday = '';
    $upGend = '';
    $upLvel = 0;

    $toQuery = "select * from seresUsers where seresID = 8";

    $execQuery = sqlsrv_query($TheConexion, $toQuery);

    if ($execQuery) {
        $info = sqlsrv_fetch_array($execQuery);

        $upId = $info['seresID'];
        $upName = $info['seresName'];
        $upPass = $info['seresPassword'];
        $upmail = $info['seresEmail'];
        $upBday = $info['seresBirthday'];
        $upGend = $info['seresGender'];
        $upLvel = $info['sereslevel'];
    }else{
        echo "<script> alert('Datos no encontrados'); </script>";
    }

    