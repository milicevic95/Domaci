<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server za 2. zadatak</title>
    </head>

    <body>
        <?php

            $ime = $_GET['ime'];

            $ln_pos = strpos($ime, " ") + 1;

            echo substr($ime, 0, 1).".".substr($ime,  $ln_pos, 1).".";

        ?>
    </body>
</html>