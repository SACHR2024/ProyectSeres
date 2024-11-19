<?php 

    include("./conection.php");

    if (isset($_POST['createSeres'])) {
        $nameUser = $_POST['userName'];
        $passwordUser = $_POST['userPassword'];
        $confirmPassordU = $_POST['passwordConfirm'];
        $emailUser = $_POST['userEmail'];

        if ($passwordUser == $confirmPassordU) {

            $Query = "INSERT INTO seresUsers2 VALUES ('$nameUser', (SELECT dbo.fun_Seres_encriptar('$passwordUser')), '$emailUser')";

            $execQuery = sqlsrv_query(conexionSqlsrv(), $Query);

            if ($execQuery) {
             echo "<h3>Datos Agregados</h3>";
             header("refresh:2; url=http://localhost/proyectSeres/index.html");
            }
        } else {
            echo "<h3>confirme la contraseña</h3>";
            header("refresh:2; url=http://localhost/proyectSeres/templates/join.html");

        }
    }else {
        echo "<h3>Error: 222</h3>";
        header("refresh:2; url=http://localhost/proyectSeres/templates/join.html");
    }