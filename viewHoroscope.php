<?php
    session_start();
    
    include "allHoroscope.php";

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(isset($_SESSION['theScopeofhoro'])){
            echo $_SESSION['theScopeofhoro'];
        }
    }

?>