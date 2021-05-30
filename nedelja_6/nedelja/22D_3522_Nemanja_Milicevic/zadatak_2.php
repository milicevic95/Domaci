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

            $x = ["potop", "buducnost", "ana", "nije"];

            function palindrom_check($niz) {
                foreach ($niz as $rec) {
                    palindrom($rec);
                }
            }

            function palindrom($rec) {
                if (strrev($rec) === $rec) {
                    echo "<p>$rec</p>";
                }
            }

            palindrom_check($x);
            
        ?>
        
    </body>
</html>