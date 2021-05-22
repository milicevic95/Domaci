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

            $n = mt_rand(1, 10);
            $x = mt_rand(1, 10);

            echo "<p>n (za span-ove) je $n</p>";
            echo "<p>x (za div-ove) je $x</p><br>";

            function n() {
                global $n;

                for ($i = 1; $i <= $n; $i++) {
                    echo "<span>Ovo je span $i</span> ";
                }
            }

            for ($i = 1; $i <= $x; $i++) {
                echo "<div>";
                n();
                echo "</div>";
            }

        ?>
        
    </body>
</html>