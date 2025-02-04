<?php
    class noticeService {

        var $userIdentity;

        function constructor($userConection) {

        }


        function getNotices($userConnect){
            /* crear una funcion para ocultar el nombre de la tabla */
            $findNotice = $userConnect->prepare("SELECT * FROM noticeImage");

            $findNotice->execute();

            $respuesta = $findNotice->fetch();

            if ($respuesta) {

                return $respuesta;

            }else {
                return "<script>alert('Error 404');</script>";
            }
        }
    }
    