<?php
    session_start();
    include "allHororscope.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $lastFour = substr($_POST['birthNR'], 2, 4);

        if(!isset($_SESSION['myhoroscope'])) {
            $_SESSION['myhoroscope'] = mySign($signs, $lastFour);
            echo true;

        }else{
            echo false;
        }
    }
?>