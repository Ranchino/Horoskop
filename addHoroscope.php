<?php
session_start();
    include 'allHoroscope.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $birthDate = substr($_POST["birthNR"], 0, 6);
        $lastFour = $birthDate[2] . $birthDate[3] . $birthDate[4] . $birthDate[5];

        if(!isset($_SESSION['theScopeofhoro'])) {
            $_SESSION['theScopeofhoro'] = mySign($signs, $lastFour, $birthDate);
            echo "true";

        }else{
            echo "false";
        }
    }
?>