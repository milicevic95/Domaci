<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>25. domaći</title>
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
            $o5 = ["Nemanja", 25, "Bg", "programer"];
            $o6 = ["Nevena", 24, "Bg", "menadzer"];
            $o7 = ["Olja", 31, "NS", "dizajner"];
            $o8 = ["Rade", 22, "Nis", "dizajner"];

            for ($i = 4; $i < 8; $i++) {
                $osoba = "o".($i + 1);

                $x[$i]['ime'] = $$osoba[0];
                $x[$i]['godine'] = $$osoba[1];
                $x[$i]['grad'] = $$osoba[2];
                $x[$i]['pozicija'] = $$osoba[3];
            }

            foreach ($x as $osoba) {
                print_r($osoba);
                echo "<br>";
            }

            //2. zadatak
            function imena_programera($arr) {
                foreach ($arr as $osoba) {
                    if ($osoba['pozicija'] === 'programer') {
                        echo "<p>{$osoba['ime']}</p>";
                    }
                }
            }

            imena_programera($x);

            //3. zadatak
            function podaci_osobe($osoba) {
                echo join(", ", $osoba)."<br>";
            }

            foreach ($x as $osoba) {
                if (stripos($osoba['ime'], 's') !== false) {
                    podaci_osobe($osoba);
                }
            }
            
        ?>
        
    </body>
</html>