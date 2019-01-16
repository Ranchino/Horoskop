<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start - Horoskop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <?php

    ?>
    <div class="imageContainer">
        <img src="./globe.jpg">
    </div>
    <div class="formContainer">
        <form id="form">  
            <h3>Skriv in ditt födelsedatum, 6 siffror!</h3>
            <input type="text" id="birthNR" placeholder="YYMMDD" value="" maxlength="6">
            <br>
            <span>
            <button class="fas fa-save" type="submit" name="saveHoro" value="" onclick="saveIT()"> Spara horoskop</button>
            </span>
            <span>
            <button class="fas fa-pencil-alt" type="submit" name="updateHoro" value="" onclick="updateIT()"> Uppdatera horoskop</button>
            </span>
            <span>
            <button class="fas fa-trash-alt" type="submit" name="eraseHoro" value="" onclick="deleteIT()"> Radera horoskop</button>
            </span>
        </form>
    </div>

    <div class="resultContainer">
        <h2>Ditt stjärn⭐tecken är:</h2>
        <div id="myHoro"></div>
    </div>

    
</body>
</html>