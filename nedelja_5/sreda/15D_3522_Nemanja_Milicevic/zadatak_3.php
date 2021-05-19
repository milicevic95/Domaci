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

            $prvo_ime = "Marija";
            $drugo_ime = "Magdalena";

            function duze_ime() {
                global $prvo_ime, $drugo_ime;

                if(isset($prvo_ime) and isset($drugo_ime)) {
                    if (strlen($prvo_ime) > strlen($drugo_ime)) {
                        return "<p style='color: red;'>$prvo_ime</p>";
                    } else {
                        if (strlen($prvo_ime) == strlen($drugo_ime)) {
                            $oba = $prvo_ime . " " . $drugo_ime;
                            return "<p>$oba</p>";
                        } else {
                            return "<p style='color: red;'>$drugo_ime</p>";
                        }
                    }
                } else {
                    die ("Nedostaje neko ili oba imena!");
                }
            }

            function krace_ime() {
                global $prvo_ime, $drugo_ime;

                if(isset($prvo_ime) and isset($drugo_ime)) {
                    if (strlen($prvo_ime) < strlen($drugo_ime)) {
                        return "<p style='color: green;'>$prvo_ime</p>";
                    } else {
                        if (strlen($prvo_ime) == strlen($drugo_ime)) {
                            return "";
                        } else {
                            return "<p style='color: green;'>$drugo_ime</p>";
                        }
                    }
                }
            }

            echo duze_ime();
            echo krace_ime();
            
        ?>
        
    </body>
</html>