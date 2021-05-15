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

            $x = mt_rand(0, 1000);
            $y = mt_rand(0, 1000);

            // 1. način

            if ($x > $y) {
                $colorx = "green";
                $colory = "red";
            } else {
                if ($x == $y) {
                    $colorx = "yellow";
                    $colory = "yellow";
                } else {
                    $colorx = "red";
                    $colory = "green";
                }
            }

            // 2. način

            if ($x > $y) {
                $classx = "green";
                $classy = "red";
            } else {
                if ($x == $y) {
                    $classx = "yellow";
                    $classy = "yellow";
                } else {
                    $classx = "red";
                    $classy = "green";
                }
            }

        ?>

        <p style="color: <?=$colorx?>;"><?=$x?></p>
        <p style="color: <?=$colory?>;"><?=$y?></p><br>

        <style>
            .green {
                color: green;
            }

            .red {
                color: red;
            }
        </style>

        <p class="<?=$classx?>"><?=$x?></p>
        <p class="<?=$classy?>"><?=$y?></p>

    </body>
</html>