<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3. zadatak - korigovana verzija</title>
    </head>

    <body>

        <?php

            $prvo_ime = "Marija";
            $drugo_ime = "Magdalena";

            function duze_ime() {
                global $prvo_ime, $drugo_ime;

                if(isset($prvo_ime) and isset($drugo_ime)) {
                    if (strlen($prvo_ime) > strlen($drugo_ime)) {
                        return $prvo_ime;
                    } else {
                        return $drugo_ime;
                    }
                } else {
                    die ("Nedostaje neko ili oba imena!");
                }
            }

            function krace_ime() {
                global $prvo_ime, $drugo_ime;

                if(isset($prvo_ime) and isset($drugo_ime)) {
                    if (strlen($prvo_ime) < strlen($drugo_ime)) {
                        return $prvo_ime;
                    } else {
                        return $drugo_ime;
                    }
                } else {
                    die ("Nedostaje neko ili oba imena!");
                }
            }
            
        ?>

        <p style='color: red;'><?=duze_ime()?></p>
        <p style='color: green;'><?=krace_ime()?></p>
        
    </body>
</html>