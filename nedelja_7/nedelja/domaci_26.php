<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>26. domaći</title>
    </head>

    <body>

        <?php

            $x = [ 
                ["ime" => "Dragana", "godine" => 32, "grad" => "Nis", "pozicija" => "programer"],
                ["ime" => "Ivana", "godine" => 20, "grad" => "Bg", "pozicija" => "dizajner"],
                ["ime" => "Sinisa", "godine" => 25, "grad" => "NS", "pozicija" => "menadzer"],
                ["ime" => "Stojan", "godine" => 50, "grad" => "NS", "pozicija" => "programer"]
            ];

            //1. zadatak
            $y = array_map(function($osoba) { $osoba['godine_staza'] = mt_rand(1, 3); return $osoba; }, $x);

            foreach ($y as $osoba) {
                print_r($osoba);
                echo "<br>";
            }
            echo "<br>";

            //2. zadatak
            usort($y, function($a, $b) {
                if ($a['godine_staza'] > $b['godine_staza']) {
                    return -1;
                } else {
                    if ($a['godine_staza'] < $b['godine_staza']) {
                        return 1;
                    } else {
                        if ($a['godine'] > $b['godine']) {
                            return -1;
                        } else {
                            return 1;
                        }
                    }
                }
            });

            foreach ($y as $osoba) {
                print_r($osoba);
                echo "<br>";
            }
            echo "<br>";

            //3. zadatak
            $max = $y[0]['godine_staza'];

            $k = count($y);
            for ($i = 1; $i < $k; $i++) {
                if ($max < $y[$i]['godine_staza']) {
                    $max = $y[$i]['godine_staza'];
                }
            }

            $z = array_filter($y, function($osoba) {
                global $max;
                if ($osoba['godine_staza'] === $max) {
                    return $osoba;
                }
            });

            foreach ($z as $osoba) {
                print_r($osoba);
                echo "<br>";
            }
            
        ?>
        
    </body>
</html>