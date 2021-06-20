<?php

    class Baza {
        public $conn;

        function __construct($baza) {
            $this->conn = new mysqli('localhost', 'root', '', $baza);

            if ($this->conn->connect_error) {
                die('Neuspesna konekcija! Prijavljena greska: '.$this->conn->connect_error);
            } else {
                echo '<p>Baza uspesno konektovana!</p>';
            }
        }

        function izvrsi_select($upit) {
            $podaci = $this->conn->query($upit);

            if($podaci === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            } else {
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }

        function prikazi_destinacije() {
            $r = $this->izvrsi_select("SELECT drzava, grad, datum_polaska, datum_povratka FROM `destinacije` JOIN `putovanja` ON destinacije.id=putovanja.destinacija_id");

            if ($r['uspesno'] == true) {
                for ($i = 0; $i < count($r['niz']); $i++) {
                    echo "<p>".join(", ", $r['niz'][$i])."</p>";
                }
            } else {
                die ("Unet nevalidan upit! Prijavljena greska: ".$r['poruka']);
            }
        }

        function prikazi_putnike() {
            $upit = "SELECT ime_prezime, drzava, grad, datum_polaska, datum_povratka FROM `putnici` JOIN (`putnici_putovanja` JOIN (`destinacije` JOIN `putovanja` ON destinacije.id=putovanja.destinacija_id) ON putnici_putovanja.id_putovanja=putovanja.id) ON putnici.broj_pasosa=putnici_putovanja.broj_pasosa;";
            $r = $this->izvrsi_select($upit);

            if ($r['uspesno'] == true) {
                for ($i = 0; $i < count($r['niz']); $i++) {
                    echo "<p>".join(", ", $r['niz'][$i])."</p>";
                }
            } else {
                die ("Unet nevalidan upit! Prijavljena greska: ".$r['poruka']);
            }
        }

        function otkazi_rezervaciju($broj_pasosa) {
            $upit = "DELETE FROM `putnici_putovanja` WHERE broj_pasosa=".$broj_pasosa.";";
            $this->conn->query($upit);
        }
    }

    $tur_agencija = new Baza("3820_domaci_32_2");
    echo "<br>";
    
    $r = $tur_agencija->izvrsi_select("SELECT * FROM putnici");
    for ($i = 0; $i < count($r['niz']); $i++) {
        echo "<p>".join(", ", $r['niz'][$i])."</p>";
    }
    echo "<br>";

    $tur_agencija->prikazi_destinacije();
    echo "<br>";

    $tur_agencija->prikazi_putnike();
    echo "<br>";

    $tur_agencija->otkazi_rezervaciju('456');
    $tur_agencija->prikazi_putnike();
    
?>