<?php
    class noticeService {

        var $userIdentity;

        function constructor($userConection) {
            $getUser = "SELECT * FROM seresUsers2 WHERE serID = $this->userIdentity";

            $send = sqlsrv_query($userConection, $getUser);

            $result = sqlsrv_fetch_array($send);

            if ($result) {
                return TRUE;
            }else{
                return FALSE;
            }
        }


        function getNotices($userConnect){
            if (true) {
                $getNotices = "SELECT * FROM noticeImage";

                $send = sqlsrv_query($userConnect, $getNotices);

                return sqlsrv_fetch_array($send);
            }else {
                return "<script>alert('Error 404');</script>";
            }
        }
    }
    