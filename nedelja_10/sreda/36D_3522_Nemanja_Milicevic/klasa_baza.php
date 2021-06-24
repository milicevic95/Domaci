<?php

    class Baza{
        public $conn;

        function __construct($baza) {
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            
            if ($this->conn->connect_error) {
                die ('Doslo je do greska pri povezivanju sa bazom: '.$this->conn->connect_error);
            }
        }

        function izvrsi_select($upit) {
            $podaci = $this->conn->query($upit);

            if ($podaci === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            } else {
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }

        function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);

            if ($odg === false) {
                die ('Doslo je do greske pri izvrsenju upita: '.$this->conn->error);
            }
        }

        function daj_proizvode() {
            $r = $this->izvrsi_select("SELECT * FROM proizvodi");

            if ($r['uspesno'] == true) {
                return $r['niz'];
            } else {
                die ("Dobijanje svih proizvoda iz baze nije uspelo: ".$r['poruka']);
            }
        }

        function daj_proizvod($id) {
            $r = $this->izvrsi_select("SELECT * FROM proizvodi WHERE id='$id'");
            if ($r['uspesno'] == true) {
                return $r['niz'][0];
            } else {
                die ("Dobijanje proizvoda iz baze nije uspelo: ".$r['poruka']);
            }
        }
    }

    $b = new Baza('3522_domaci_36');

?>