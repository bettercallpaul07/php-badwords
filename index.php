<?php

$songTxt = "Si alza dalla sedia del bar chiuso lentamente Cisco e all'improvviso dice voi non capite un cazzo, è un po come nel calcio";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <h3>Testo della canzone da censurare</h3>
    <div class="txtSong">
        <p><?php echo $songTxt; ?>
        </p>
        <div class="nws"><?php echo strlen($songTxt) ?></div>

    </div>




    <form action="" method="GET">

        <input type="text" name="badword" placeholder="Inserisci parola da censurare...">
        <button>
            Invia
        </button>
        <button>
            <a href="./">Reset</a>
        </button>
    </form>

    <p>

        <?php $newSongTxt =  str_replace($_GET["badword"], "***", $songTxt);
        // var_dump($_GET) ?>

    </p>


    <div id="nts">
        <h3>Testo della canzone censurato</h3>

        <div class="txtSong">
            <?php echo $newSongTxt; ?>
            <div class="nws">
                <?php echo strlen($newSongTxt); ?></div>


        </div>
    </div>

</body>

</html>