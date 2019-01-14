<?php

    function mySign($signs, $lastFour, $birthDate){
        foreach($signs as $sign){
            if($lastFour >= $sign['from'] && $lastFour <= $sign['to']){
                $label = $sign['label'];
                $theScopeofhoro = "<h3>$label</h3>";
                return $theScopeofhoro;
            }
        }
    }

    $signs [] = [
        "label" => "Stenbocken",
        "from" => "1222",
        "to" => "0119",
    ];
    $signs [] = [
        "label" => "Vattumannen",
        "from" => "0120",
        "to" => "0218",
    ];
    $signs [] = [
        "label" => "Fiskarna",
        "from" => "0219",
        "to" => "0320",
    ];
    $signs [] = [
        "label" => "Väduren",
        "from" => "0321",
        "to" => "0419",
    ];
    $signs [] = [
        "label" => "Oxen",
        "from" => "0420",
        "to" => "0520",
    ];
    $signs [] = [
        "label" => "Tvillingarna",
        "from" => "0521",
        "to" => "0621",
    ];
    $signs [] = [
        "label" => "Kräftan",
        "from" => "0622",
        "to" => "0722",
    ];
    $signs [] = [
        "label" => "Lejonet",
        "from" => "0723",
        "to" => "0822",
    ];
    $signs [] = [
        "label" => "Jungfrun",
        "from" => "0823",
        "to" => "0922",
    ];
    $signs [] = [
        "label" => "Vågen",
        "from" => "0923",
        "to" => "1022",
    ];
    $signs [] = [
        "label" => "Skorpionen",
        "from" => "1023",
        "to" => "1121",
    ];
    $signs [] = [
        "label" => "Skytten",
        "from" => "1122",
        "to" => "1221",
    ];


?>
