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

            $arr = [1, 2, 3, 4, 5];
            $new_arr = [];

            $c = count($arr);
            $sum = array_sum($arr);

            $avrg = $sum / $c;

            foreach ($arr as $num) {
                if ($num > $avrg) {
                    array_push($new_arr, $num);
                }
            }

            echo join(", ", $new_arr);
            
        ?>
        
    </body>
</html>