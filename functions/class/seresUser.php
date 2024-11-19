<?php

    class SeresUser {
        var $idUser;
        var $nameUser;
        var $passwordUser;
        var $emailUser;

        function construct(){
            
        }

        function Login($conect){

            try {
                $logear = $conect->prepare("SELECT * FROM seresUsers2 WHERE serName = :paramName AND serPassword = (select dbo.fun_Seres_encriptar(:paramPassword ))");

                $logear->bindValue(":paramName", $this->nameUser);
                $logear->bindValue(":paramPassword", $this->passwordUser);

                $logear->execute();

                $respuesta = $logear->fetch();

                return $respuesta;

            } catch (PDOExeption $R) {
                echo "Error: ". $R;
            }
        }
    }