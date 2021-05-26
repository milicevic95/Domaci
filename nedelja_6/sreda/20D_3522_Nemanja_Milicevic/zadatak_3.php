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

            function createDivs($n, $m) {
                $str_divs = "";
                for($i = 1; $i <= $n; $i++) {
                    $str_divs .= "<div>";
                    for ($j = 1; $j <= $m; $j++) {
                        $str_divs .= "<span>$j</span>";
                    }
                    $str_divs .= "</div>";
                }
                return $str_divs;
            }

            echo createDivs(5, 2);

        ?>
        
    </body>
</html>