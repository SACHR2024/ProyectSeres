<?php

    include("conection.php");

    $toQuery = "select * from seresUsers where seresID = 8";

    $execQuery = sqlsrv_query($TheConexion, $toQuery);

    echo $execQuery;