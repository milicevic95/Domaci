<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3. zadatak</title>

        <style>
            table, table td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            table td {
                width: 40px;
                line-height: 40px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php

            $a = mt_rand(1, 10);
            $b = mt_rand(1, 10);
            $c = mt_rand(1, 10);

        ?>

        <table>
            <tr>
                <td><?=$a?></td>
                <td><?=$a**2?></td>
            </tr>
            <tr>
                <td><?=$b?></td>
                <td><?=$b**2?></td>
            </tr>
            <tr>
                <td><?=$c?></td>
                <td><?=$c**2?></td>
            </tr>
        </table>

        <br>
        <br>

        <a href="../zadatak_2/index.php">Klikni da otvoriš 2. zadatak.</a>
    </body>
</html>