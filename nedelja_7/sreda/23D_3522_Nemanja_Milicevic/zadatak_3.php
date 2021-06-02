<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3. zadatak</title>
    </head>

    <body>

        <?php

            // a)
            function create_arr() {
                $str = $_GET['arr'];
                return explode(" ", $str);
            }

            // b)
            function arr_even_num($arr) {
                $c = 0;
                foreach ($arr as $num) {
                    if ($num % 2 === 0) {
                        $c++;
                    }
                }

                $arr_str = join(", ", $arr);

                if ($c >= 3) {
                    return "<p>Niz $arr_str ima bar tri parna broja.</p>";
                }
                return "<p>Niz $arr_str ima manje od tri parna broja.</p>";
            }
            
            // c)
            function arr_less_num($arr) {
                $c = 0;
                foreach ($arr as $num) {
                    if ($num < 1000) {
                        $c++;
                    }
                }

                $arr_str = join(", ", $arr);

                if ($c === count($arr)) {
                    return "<p>Niz $arr_str ima sve brojeve manje od 1000.</p>";
                }
                return "<p>Niz $arr_str nema sve brojeve manje od 1000.</p>";
            }

            // d)
            $x = create_arr();
            echo arr_even_num($x);
            echo arr_less_num($x);
            
        ?>
        
    </body>
</html>