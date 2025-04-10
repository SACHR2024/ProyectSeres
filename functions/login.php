<?php
    include("./class/seresUser.php");
    include("./conection.php");

    //TODO; realizar un cambio para utilizar la funcion de sesion de PHP


    $user = new SeresUser();

    $user->nameUser = $_POST['userName'];
    $user->passwordUser = $_POST['userPassword'];

    $resp = $user->Login(conexionPDO());

    if ($resp) {
        session_name("seresUser");        
        session_start();

        $_SESSION['identity'] =  $resp['serID'];
        $_SESSION['name'] =  $resp['serName'];
        $_SESSION['serEmail'] =  $resp['serEmail'];
        $_SESSION['profile_background'] =  $resp['imgBackground'];
        $_SESSION['profile_image'] =  $resp['imgProfile'];

        echo "<h1>Bienvenido!!</h1>";
        header("refresh:2; url=http://localhost/proyectSeres/templates/logged/userHome.php");
    }else {
        echo "<h1>FFFFFFF</h1>";
        header("refresh:2; url=http://localhost/proyectSeres/templates/login.html");
        
    }