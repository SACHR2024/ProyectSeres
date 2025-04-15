<?php

    class SeresUser {
        var $nameUser;
        var $idUser;
        var $passwordUser;
        var $emailUser;
        var $profileUser;
        var $backgroundUSer;

        function construct(){
            
        }

        function Login($conect){

            try {
                $logear = $conect->prepare("EXEC SeresLogin :paramName, :paramPassword");

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
                    //TODO: CREAR UNA FUNCION EN EL SERVIDOR PARA ACTUALIZAR LOS DATOS DEL USUARIO 
                    $actualizar = $conect->prepare("EXEC SeresUpdate :paramName, :paramPassword, :paramEmail, :paramID");

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
                //TODO: CREAR UNA FUNCION EN EL SERVIDOR PARA INICIAR SESION Y ASI NO COLOCAR TODO EL QUERY EN EL CODIGO
                $borrar = $conect->prepare("EXEC SeresDelete :paramID");

                $borrar->bindValue("paramID", $this->idUser);

                $borrar->execute();

                return true;

            } catch (PDOExeption $R) {
                echo "Error: ". $R;
            }
        }
    }