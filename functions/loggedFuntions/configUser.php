<?php

    include("../../functions/conection.php");
    include("../../functions/class/seresUser.php");

    $actions = new SeresUser();

    $toConexion = conexionSqlsrv();

    $userIde = $idUser;

    if ($userIde > 0) {
        $target = "SELECT * FROM seresUsers2 WHERE serID = $userIde";
        $toGet = sqlsrv_query($toConexion, $target);

        $user = sqlsrv_fetch_array($toGet);
        
        $oldName = $user['serName'];
        $oldPass = $user['serPassword'];
        $oldMail = $user['serEmail'];

    }else {
        echo "<h1>Usuario no encontrado</h1>";
    }

    