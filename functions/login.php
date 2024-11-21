<?php
    include("./class/seresUser.php");
    include("./conection.php");

    $user = new SeresUser();

    $user->nameUser = $_POST['userName'];
    $user->passwordUser = $_POST['userPassword'];

    $resp = $user->Login(conexionPDO());

    if ($resp) {
        $theID = $resp['serID'];
        echo "<h1>Bienvenido!!</h1>";
        header("refresh:2; url=http://localhost/proyectSeres/templates/logged/userHome.php?user=$theID");
    }else {
        echo "<h1>FFFFFFF</h1>";
        header("refresh:2; url=http://localhost/proyectSeres/templates/login.html");
        
    }