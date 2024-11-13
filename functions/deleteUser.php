<?php

    include("conection.php");

    if (isset($_GET['toDelete'])) {
        $toDelete = $_GET['toDelete'];

        $deleteQuery = "delete from seresUsers where seresID = $toDelete;";

        $exec = sqlsrv_query($TheConexion, $deleteQuery);

        if ($exec) {
            echo "<script> alert('datos eliminados') </script>";
            echo "<script> window.open('userConfig.php', '_self') </script>";
        }

    }else {
        echo "4444 <script> alert('User 404') </script>";
        echo "<script> window.open('userConfig.php', '_self') </script>";
    }