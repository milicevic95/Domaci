<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3. zadatak</title>
    </head>

    <body>

        <?php

            $x = ["Naslovna", "O nama", "Proizvodi", "Kontakt"];

            function create_menu($niz) {
                $menu = "Meni:<ul>";
                foreach ($niz as $stavka) {
                    $menu .= "<li>$stavka</li>";
                }
                $menu .= "</ul>";

                return $menu;
            }

            echo create_menu($x);

        ?>
        
    </body>
</html>