<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>27. domaći</title>
    </head>

    <body>

        <?php

            //1. zadatak
            class Krevet {
                public $duzina, $sirina, $materijal;
                private $cena;

                function __construct($duzina, $sirina, $materijal, $cena) {
                    $this->duzina = $duzina;
                    $this->sirina = $sirina;
                    $this->materijal = $materijal;
                    $this->cena = $cena;
                }

                function salji_cenu() {
                    return $this->cena;
                }

                function __toString() {
                    return "Krevet je duzine $this->duzina m i sirine $this->sirina m napravljen od $this->materijal po ceni od $this->cena din.";
                }

                //3. zadatak
                function popust($price_low) {
                    $this->cena = $this->cena - ($this->cena * ($price_low / 100));
                }
            }

            //2. zadatak
            echo "<h3>27. domaci, 2. zadatak</h3>";

            $k1 = new Krevet(2, 1.5, "metala", 15000);
            $k2 = new Krevet(2.2, 3, "drveta", 32000);

            if ($k1->salji_cenu() > $k2->salji_cenu()) {
                echo $k1."<br>";
            } else {
                echo $k2."<br>";
            }

            //3. zadatak
            echo "<h3>27. domaci, 3. zadatak</h3>";

            $k3 = new Krevet(2.2, 3, "metala", 20000);
            echo $k3."<br>";
            $k3->popust(10);
            echo $k3."<br>";
            
        ?>
        
    </body>
</html>