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

            $i = 30;
            while ($i !== 100) {
                $pc = floor($i / 10);
                $dc = $i % 10;

                if ($pc % 3 == 0 or $dc % 4 == 0) {
                    $i++;
                    continue;
                }

                echo "<p>$i<p>";
                $i++;
            }

        ?>
        
    </body>
</html>