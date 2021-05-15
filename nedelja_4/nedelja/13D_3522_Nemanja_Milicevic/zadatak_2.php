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

            $x = mt_rand(0, 1000);
            $y = mt_rand(0, 1000);
            $z = mt_rand(0, 1000);

            // Rešenje sam mogao na lakši način, ali pošto je zadatak da vežbamo if i else u spoljašnjim if i else, ostavio sam ovako.
            // Izrazio sam koliko su x, y i z i uporedio sam ih u obliku x > y > z. Moglo je i direktno da se porede brojevi tako što bi se varijable $x, $y i $z direktno dodelile varijablama $a, $b i $c, a ne karakteri x, y i z.

            if ($x > $y and $x > $z) {
                if ($y > $z) {
                    $a = "x";
                    $b = "y";
                    $c = "z";
                } else {
                    $a = "x";
                    $b = "z";
                    $c = "y";
                }
            } else {
                if ($x < $y and $x > $z) {
                    $a = "y";
                    $b = "x";
                    $c = "z";
                } else {
                    if ($x > $y and $x < $z) {
                        $a = "z";
                        $b = "x";
                        $c = "y";
                    } else {
                        if ($y > $z) {
                            $a = "y";
                            $b = "z";
                            $c = "x";
                        } else {
                            $a = "z";
                            $b = "y";
                            $c = "x";
                        }
                    }
                }
            }
        ?>

        <p><?="x = $x"?></p>
        <p><?="y = $y"?></p>
        <p><?="z = $z"?></p>

        <p><?="$a > $b > $c"?></p>
        
    </body>
</html>