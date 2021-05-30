<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>4. zadatak</title>

        <style>
            .oznacen {
                background-color: green;
            }
        </style>
    </head>

    <body>

        <?php

            $x = ["Naslovna", "O nama", "Proizvodi", "Kontakt"];

            function a_create_menu($niz, $oznacen) {
                $menu = "Meni:<ul>";
                foreach ($niz as $ind => $stavka) {
                    if ($ind == $oznacen) {
                        $cl = 'oznacen';
                    } else {
                        $cl = '';
                    }
                    $menu .= "<li class='$cl'>$stavka</li>";
                }
                $menu .= "</ul>";

                return $menu;
            }

            echo a_create_menu($x, 2);

            function b_create_menu($niz, $oznacen) {
                $menu = "Meni:<ul>";
                foreach ($niz as $stavka) {
                    if (strtolower($stavka) == strtolower($oznacen)) {
                        $cl = 'oznacen';
                    } else {
                        $cl = '';
                    }
                    $menu .= "<li class='$cl'>$stavka</li>";
                }
                $menu .= "</ul>";

                return $menu;
            }

            echo b_create_menu($x, "Kontakt");
            
        ?>
        
    </body>
</html>