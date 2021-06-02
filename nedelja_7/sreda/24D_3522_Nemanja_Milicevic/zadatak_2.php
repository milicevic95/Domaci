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

            $arr = ['ponedeljak' => 27, 'utorak' => 29, 'cetvrtak' => 28, 'petak' => 28];

            function week_success($arr) {
                $max = 0;
                $ind = "";

                foreach ($arr as $day => $num) {
                    if ($max < $num) {
                        $max = $num;
                        $ind = $day;
                    }
                }

                $avrg = number_format(array_sum($arr) / count($arr), 2);
                $diff = $max - min($arr);

                echo "Najuspesniji dan je $ind.<br>";
                echo "Prosečna uspešnost je $avrg.<br>";
                echo "Razlika između najbolje i najgore uspešnosti je $diff.<br>";

            }

            week_success($arr);
            
        ?>
        
    </body>
</html>