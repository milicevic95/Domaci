<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>28. domaći</title>
    </head>

    <body>

        <?php

            require_once ("domaci_27.php");

            //1. zadatak
            class Baldahin extends Krevet {

                function __construct($duzina, $sirina, $materijal, $cena, $visina, $cenaBaldahina) {
                    parent::__construct($duzina, $sirina, $materijal, $cena);
                    $this->visina = $visina;
                    $this->cenaBaldahina = $cenaBaldahina;
                }

                //2. zadatak
                function __toString() {
                    return "Cena kreveta bez baldahina je ".$this->salji_cenu()." din, a sa baldahinom je ".($this->salji_cenu() + $this->cenaBaldahina)." din.";
                }
            }

            echo "<h3>28. domaci</h3>";
            $kb = new Baldahin(2.2, 3, "drveta", 32000, 3, 8000);
            echo $kb;
            
        ?>
        
    </body>
</html>