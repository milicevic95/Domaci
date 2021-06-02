<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1. zadatak</title>

        <style>
            .crveni {
                color: red;
            }

            .zeleni {
                color: green;
            }
        </style>
    </head>

    <body>

        <?php

            $arr = ['pas', 'mačka', 'konj', 'aligator'];
            $new_arr = [];

            foreach ($arr as $word) {
                if (strlen($word) < 5) {
                    $cl = 'crveni';
                } else {
                    $cl = 'zeleni';
                }
                array_push($new_arr, "<span class='$cl'>$word</span>");
            }

            echo join(", ", $new_arr);

        ?>
        
    </body>
</html>