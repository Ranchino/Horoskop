<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start - Horoskop</title>
    <link rel="stylesheet" href="./styling.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <?php

    ?>
    <h3>Skriv in ditt födelsedatum, 6 siffror!</h3>
    <form>  
        <input type="text" id="birthNR" placeholder="YYMMDD" value="" maxlength="6">
        <br>
        <span>
        <button type="submit" name="saveHoro" value="" onclick="saveIT()">Spara mitt horoskop</button>
        </span>
        <span>
        <button type="submit" name="updateHoro" value="" onclick="updateIT()">Uppdatera mitt horoskop</button>
        </span>
        <span>
        <button type="submit" name="eraseHoro" value="" onclick="deleteIT()">Radera mitt horoskop</button>
        </span>
    </form>

    <div class="container">
        <h2>Ditt horoskop är:</h2>
        <div id="myHoro"></div>
    </div>
    
</body>
</html>