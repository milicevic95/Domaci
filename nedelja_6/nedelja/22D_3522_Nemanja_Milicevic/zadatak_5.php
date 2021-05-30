<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>5. zadatak</title>
    </head>

    <body>

        <?php

            $boje = ['green', 'blue', 'yellow'];
            $reci = ['sto', 'stolica', 'mobilni'];

            function words_in_color($boje, $reci) {
                $k = count($boje);

                for ($i = 0; $i < $k; $i++) {
                    echo "<span style='color: {$boje[$i]};'>{$reci[$i]}</span><br>";
                }
            }

            words_in_color($boje, $reci);
            
        ?>
        
    </body>
</html>