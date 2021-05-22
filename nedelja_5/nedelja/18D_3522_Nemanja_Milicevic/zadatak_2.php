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

            $p = 1;

            $i = 30;
            while ($i !== 0) {
                if ($p <= 100000) {
                    $p *= $i;
                    $i--;
                } else {
                    echo "<p style='color: red;'>$p</p>";
                    echo "<p style='color: green;'>".($i+1)."</p>";
                    break;
                }
            }

        ?>
        
    </body>
</html>