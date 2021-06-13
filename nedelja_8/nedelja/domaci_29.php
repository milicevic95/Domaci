<?php

    class SastojakHrane {
        public $naziv, $mera, $kalorije;

        function __construct($podatak) {
            $this->naziv = $podatak['naziv'];
            $this->mera = $podatak['mera'];
            $this->kalorije = $podatak['kalorije'];
        }

        function promeniMeru($nova_mera) {
            $this->mera = $nova_mera;
        }

        function prikazi() {
            echo "<p>$this->naziv, $this->mera, $this->kalorije kcal</p>";
        }
    }

    class Jelo {
        public $naziv, $opis, $sastojci = [];

        function __construct($naziv, $opis, $podaci) {
            $this->naziv = $naziv;
            $this->opis = $opis;
            foreach ($podaci as $podatak) {
                $sastojak = new SastojakHrane($podatak);
                array_push($this->sastojci, $sastojak);
            }
        }

        function promeniMeru($naziv, $nova_mera) {
            $k = count($this->sastojci);
            for ($i = 0; $i < $k; $i++) {
                if ($this->sastojci[$i]->naziv === $naziv) {
                    $this->sastojci[$i]->promeniMeru($nova_mera);
                }
            }
        }

        function prikazi() {
            foreach ($this->sastojci as $sastojak) {
                $sastojak->prikazi();
            }
        }
    }

    $podaci = [
        ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
        ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
        ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
        ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
    ];

    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    $jelo->promeniMeru("brasno", "400g");
    $jelo->prikazi();
    
?>