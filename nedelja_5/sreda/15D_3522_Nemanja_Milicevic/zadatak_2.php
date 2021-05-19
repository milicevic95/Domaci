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

            $prvo_ime = "Marija";
            $drugo_ime = "Magdalena";

            function ime() {
                global $prvo_ime, $drugo_ime;

                if(isset($prvo_ime) and isset($drugo_ime)) {
                    if (strlen($prvo_ime) > strlen($drugo_ime)) {
                        return $prvo_ime;
                    } else {
                        if (strlen($prvo_ime) == strlen($drugo_ime)) {
                            $oba = $prvo_ime . " " . $drugo_ime;
                            return $oba;
                        } else {
                            return $drugo_ime;
                        }
                    }
                } else {
                    die ("Nedostaje neko ili oba imena!");
                }
            }

            echo ime();
            
        ?>
        
    </body>
</html>