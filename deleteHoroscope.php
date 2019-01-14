<?php
session_start();

include "allHoroscope.php";

if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if(isset($_SESSION['theScopeofhoro'])){
        session_unset();
    }
}

?>