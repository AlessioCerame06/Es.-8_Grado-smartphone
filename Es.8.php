<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMARTPHONE</title>
    </head>
    <body>

    <?php
    $modello = "Samsung Galaxy A14";
    $grado = "a";

    switch ($grado) {
        case "a" :
            $str = "<p>$modello perfetto, pari al nuovo.</p>";
            break;

        case "b" :
            $str = "<p>$modello in ottime condizioni.</p>";
            break;

        case "c" :
            $str = "<p>$modello  con graffi e/o segni di usura.</p>";
            break;

        default :
            $str = "<p style='color : red'>errore: grado non riconosciuto</p>";
    }

    echo $str;


    ?>
        
    </body>
</html>
