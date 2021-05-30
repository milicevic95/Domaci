<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1. zadatak</title>
    </head>

    <body>

        <?php

            $x = [11, 231, 44, 533, 112];

            function niz_check($niz) {
                $k = count($niz);
                $dvo = 0;
                $tro = 0;

                for ($i = 0; $i < $k; $i++) {
                    if (strlen($niz[$i]) === 2) {
                        $dvo++;
                    }
                    if (strlen($niz[$i]) === 3) {
                        $tro++;
                    }
                }

                if ($dvo > $tro) {
                    echo "Vise ima dvocifrenih.";
                } else {
                    echo "Vise ima trocifrenih.";
                }
            }

            niz_check($x);

        ?>
        
    </body>
</html>