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

            $arr = [1, 10, 0, 2];

            function without_0($arr) {
                foreach ($arr as $num) {
                    if ($num === 0) {
                        return false;
                    }
                }
                return true;
            }

            $arr_str = join(", ", $arr);

            if (without_0($arr)) {
                echo "Niz $arr_str ne sadrzi nule.";
            } else {
                echo "Niz $arr_str sadrzi nulu/e.";
            }
            
        ?>
        
    </body>
</html>