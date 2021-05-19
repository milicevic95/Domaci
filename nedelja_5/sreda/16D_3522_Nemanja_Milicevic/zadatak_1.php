<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP za 16. domaći</title>
    </head>

    <body>

        <?php

            // 1. celina
            $fn = $_GET['fn'];
            $sn = $_GET['sn'];
            $tn = $_GET['tn'];
            $ln = $_GET['ln'];
            echo "$fn, $sn, $tn, $ln <br><br>";

            // 2. celina
            if ($fn > $sn or $tn > $ln) {
                die ("Drugi broj nije veći od prvog i/ili četvrti broj nije veći od trećeg.");
            }

            // 3. celina
            if ($fn < $sn and $tn < $ln) {

                $zbir1 = 0;
                for ($i = $fn; $i <= $sn; $i++) {
                    if ($i % 4 == 0) {
                        echo "$i <br>";
                        $zbir1 += $i;
                    }
                }

                echo "<br>";

                $zbir2 = 0;
                for ($i = $tn; $i <= $ln; $i++) {
                    if ($i % 3 == 0) {
                        echo "$i <br>";
                        $zbir2 += $i;
                    }
                }

                echo "<br>";

                if ($zbir1 > $zbir2) {
                    echo "Zbir brojeva od 1. broja ($fn) do 2. broja ($sn) deljivih sa 4 je veći od zbira brojeva od 3. broja ($tn) do 4. broja ($ln) deljivih sa 3.<br>";
                    echo "Zbir 1: $zbir1 > Zbir 2: $zbir2";
                } else {
                    if ($zbir1 == $zbir2) {
                        echo "Zbirovi su jednaki i iznose $zbir1.";
                    } else {
                        echo "Zbir brojeva od 1. broja ($fn) do 2. broja ($sn) deljivih sa 4 je manji od zbira brojeva od 3. broja ($tn) do 4. broja ($ln) deljivih sa 3.<br>";
                        echo "Zbir 1: $zbir1 < Zbir 2: $zbir2";
                    }
                }
            }

        ?>
        
    </body>
</html>