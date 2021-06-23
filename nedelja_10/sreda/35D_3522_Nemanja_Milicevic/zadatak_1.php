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

        function id_destinacije($drzava, $grad) {
            $r = $this->izvrsi_select("SELECT id FROM destinacije WHERE drzava='$drzava' AND grad='$grad'");

            if ($r['uspesno'] == true) {
                return $r['niz'][0]['id'];
            } else {
                die ("Nije pronadjena destinacija na osnovu unete drzave/grada! Prijavljena greska: ".$r['poruka']);
            }
        }

        function pronalazi_putovanja($id_destinacije) {
            $upit = "SELECT putovanja.id, drzava, grad, datum_polaska, datum_povratka, cena FROM destinacije JOIN putovanja ON destinacije.id=putovanja.destinacija_id WHERE destinacija_id='$id_destinacije'";
            $r = $this->izvrsi_select($upit);

            if ($r['uspesno'] == true) {
                return $r['niz'];
            } else {
                die ("Nije pronadjeno putovanje na osnovu id-a destinacije! Prijavljena greska: ".$r['poruka']);
            }
        }

        function brise_aranzman($id_putovanja) {
            $upit = "DELETE FROM spisak_putnika WHERE id_putovanja='$id_putovanja'";
            $podaci = $this->conn->query($upit);

            if($podaci === false) {
                die ("Brisanje nije uspelo! Prijavljena greska: ".$this->conn->error);
            }
        }
    }

    $tur_agencija = new Baza('turisticka_agencija');
    
    $id_destinacije = $tur_agencija->id_destinacije('SAD', 'Majami');
    echo "<p>ID = $id_destinacije</p>";

    $putovanja = $tur_agencija->pronalazi_putovanja($id_destinacije);
    echo "<table border='1'><tr><td>id putovanja</td><td>drzava</td><td>grad</td><td>datum polaska</td><td>datum povratka</td><td>cena</td></tr>";
    foreach ($putovanja as $putovanje) {
        echo "<tr>";
        foreach ($putovanje as $podatak) {
            echo "<td>$podatak</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    $id_prvog_putovanja = $putovanja[0]['id'];
    $tur_agencija->brise_aranzman($id_prvog_putovanja);
    
?>