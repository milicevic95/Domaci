<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2. zadatak</title>

        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
            }

            td {
                width: 30px;
                height: 30px;
            }

            .black {
                background-color: black;
                color: white;
            }
        </style>
    </head>

    <body>

        <?php

            $x = mt_rand(1, 64);
            echo "<p>x je $x</p>";
            $k = 1;

            echo "<table>";
            for ($i = 1; $i <= 8; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 8; $j++) {
                    if ($k == $x) {
                        $cl = "black";
                    } else {
                        $cl = "white";
                    }
                    echo "<td class='$cl'>$k</td>";
                    $k++;
                }
                echo "</tr>";
            }
            echo "</table>";

        ?>
        
    </body>
</html>