<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server za 1. zadatak</title>
    </head>

    <body>
        <?php

            $ime = $_GET['ime'];
            $prezime = $_GET['prezime'];

            echo substr($ime, 0, 1).".".substr($prezime, 0, 1).".";

        ?>
    </body>
</html>