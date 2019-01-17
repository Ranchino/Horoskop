<?php
session_start();
parse_str(file_get_contents('php://input'), $_PUT);

include "allHoroscope.php";

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $birthDate = substr($_PUT["birthNR"], 0, 6);
    $lastFour = $birthDate[2] . $birthDate[3] . $birthDate[4] . $birthDate[5];

    if(isset($_SESSION['theScopeofhoro'])){
        session_unset();
        $_SESSION['theScopeofhoro'] = mySign($signs, $lastFour, $birthDate);
        echo "true";
    }else{
        echo "false";
    }
}
?>