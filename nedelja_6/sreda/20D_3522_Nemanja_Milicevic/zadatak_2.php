<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2. zadatak</title>
    </head>

    <body>

        <?php

            function createSpans($n) {
                $str_div = "<div>";
                for ($i = 1; $i <= $n; $i++) {
                    $str_div .= "<span>$i</span>";
                }
                $str_div .= "</div>";
                return $str_div;
            }

            echo createSpans(5);

        ?>
        
    </body>
</html>