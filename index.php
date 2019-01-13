<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start - Horoskop</title>
</head>
<body>
    <?php

    ?>
    <h3>Skriv in din födelsenr, 6 siffror!</h3>
    <form method="post" action="">  
        <input type="text" name="birthNR" placeholder="YYMMDD" value="">
        <br>
        <span>
        <button type="submit" name="saveHoro" value="">Spara mitt horoskop</button>
        </span>
        <span>
        <button type="submit" name="updateHoro" value="">Uppdatera mitt horoskop</button>
        </span>
        <span>
        <button type="submit" name="eraseHoro" value="">Radera mitt horoskop</button>
        </span>

    </form>
    <div id="myHoro">
    </div>
    
</body>
</html>