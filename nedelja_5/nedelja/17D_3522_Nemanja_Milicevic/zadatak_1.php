<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1. zadatak</title>
    </head>

    <body>

        <?php

            $ime = "Nemanja";
            $prezime = "Milicevic";

            function paragraf() {
                global $ime, $prezime;
                echo "<p><span>$ime</span> <span>$prezime</span></p>";
            }

            for ($i = 0; $i < (strlen($ime.$prezime)); $i++) {
                paragraf();
            }

        ?>
        
    </body>
</html>