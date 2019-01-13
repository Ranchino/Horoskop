<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start - Horoskop</title>
    <link rel="stylesheet" href="./styling.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php

    ?>
    <h3>Skriv in din födelsenr, 6 siffror!</h3>
    <form action="addHoroscope.php" method="post">  
        <input type="text" name="birthNR" placeholder="YYMMDD" value="">
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
        <h2>Ditt horoskop är</h2>
        <div id="myHoro"></div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>