<?php
    class noticeService {

        var $userIdentity;

        function constructor() {

        }


        function getNotices($userConnect){
            /* crear una funcion para ocultar el nombre de la tabla */
            $findNotice = $userConnect->prepare("SELECT * FROM noticeImage");

            $findNotice->execute();

            if ($findNotice) {

                return $findNotice;

            }else {
                return "<script>alert('Error 404');</script>";
            }
        }
    }
    