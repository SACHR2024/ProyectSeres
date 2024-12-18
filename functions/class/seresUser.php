<?php

    class SeresUser {
        var $nameUser;
        var $idUser;
        var $passwordUser;
        var $emailUser;

        function construct(){
            
        }

        function Login($conect){

            try {
                $logear = $conect->prepare("SELECT * FROM seresUsers2 WHERE serName = :paramName AND serPassword = (select dbo.fun_Seres_encriptar(:paramPassword))");

                $logear->bindValue(":paramName", $this->nameUser);
                $logear->bindValue(":paramPassword", $this->passwordUser);

                $logear->execute();

                $respuesta = $logear->fetch();

                return $respuesta;

            } catch (PDOExeption $R) {
                echo "Error: ". $R;
            }
        }

        function UpdateUser($conect, $confirmPass) {
            if ($confirmPass == $this->passwordUser) {
                try {

                    $actualizar = $conect->prepare("UPDATE seresUsers2 SET serName = :paramName, serPassword = (SELECT dbo.fun_Seres_encriptar(:paramPassword)), serEmail = :paramEmail WHERE serID = :paramID");

                    $actualizar->bindValue(":paramName", $this->nameUser);
                    $actualizar->bindValue(":paramPassword", $this->passwordUser);
                    $actualizar->bindValue(":paramEmail", $this->emailUser);
                    $actualizar->bindValue(":paramID", $this->idUser);

                    $actualizar->execute();

                    return true;

                } catch (PDOExeption $R) {
                    echo "Error: ". $R;
                }
            }else {
                echo "<script>alert('confirme la Contraseña')</script>";
            }
        }

        function DeleteUser($conect) {
            try {
                $borrar = $conect->prepare("DELETE FROM seresUsers2 WHERE serID = :paramID");

                $borrar->bindValue("paramID", $this->idUser);

                $borrar->execute();

                return true;

            } catch (PDOExeption $R) {
                echo "Error: ". $R;
            }
        }
    }