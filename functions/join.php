<?php 

    include("conection.php");

    if (isset($_POST['createSeres'])) {
        $nameUser = $_POST['userName'];
        $passwordUser = $_POST['userPassword'];
        $confirmPassordU = $_POST['passwordConfirm'];
        $emailUser = $_POST['userEmail'];
        $BirthdayUser = $_POST['userbirthday'];
        $genderUser = $_POST['userGender'];

        if ($passwordUser == $confirmPassordU) {

            $Query = "insert into seresUsers values ('$nameUser', '$passwordUser', '$emailUser', '$BirthdayUser', '$genderUser', 0);";

            $execQuery = sqlsrv_query($TheConexion, $Query);

            if ($execQuery) {
             echo "<h3>Datos Agregados</h3>";
            }
        } else {
            echo "<h3>confirme la contraseña</h3>";

        }
    }
?>