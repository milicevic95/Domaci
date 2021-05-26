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

            function theBiggestNum($a, $b, $c) {
                if ($a > $b and $a > $c) {
                    return $a;
                } else {
                    if ($b > $c) {
                        return $b;
                    } else {
                        return $c;
                    }
                }
            }

            $x = theBiggestNum(10, 4, 9);
            echo "Najveci broj od izabranih je $x";

        ?>
        
    </body>
</html>