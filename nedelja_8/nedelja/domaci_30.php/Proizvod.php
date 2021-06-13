<style>
    a {
        color: darkblue;
    }
</style>


<?php 

    include ("podaci.php");
    
    class Proizvod{
        public $id, $ime, $slika, $opis, $naslov, $cena, $grupa;

        function __construct($niz) {
            $this->id = $niz['id'];
            $this->ime = $niz['ime'];
            $this->slika = $niz['slika'];
            $this->opis = $niz['opis'];
            $this->naslov = $niz['naslov'];
            $this->cena = $niz['cena'];
            $this->grupa = $niz['grupa'];
        }

        function prikazi_proizvod() {
            echo "<div style='border: 1px solid black; width: 200px; display: inline-block; margin: 5px; padding: 5px; background-color: honeydew;'>";
            echo "<h3>$this->naslov</h3>";
            echo "<img src='$this->slika' alt='slika' />";
            echo "<p><a href='detaljnije.php?id=$this->id'>Detaljnije</a></p>";
            echo "</div>";
        }

        function prikazi_proizvod_detaljnije() {
            echo "<div style='border: 1px solid black; width: 200px; display: inline-block; margin: 5px; padding: 5px; background-color: honeydew;'>";
            echo "<h3>$this->naslov</h3>";
            echo "<img src='$this->slika' alt='slika' />";
            echo "<p>$this->opis</p>";
            echo "<p>$this->cena RSD</p>";
            echo "</div>";
        }
    }

    class ListaProizvoda{
        public $p;

        function __construct() {
            $this->p = [];
        }

        function dodaj_proizvode($podaci) {
            $k = count($podaci);

            for ($i = 0; $i < $k; $i++){
                $pr = new Proizvod($podaci[$i]);
                array_push($this->p, $pr);
            }
        }

        function prikazi_sve_proizvode($grupa = "") {
            if ($grupa !== "") {
                foreach ($this->p as $jedan_proizvod) {
                    if ($jedan_proizvod->grupa === $grupa) {
                        $jedan_proizvod->prikazi_proizvod();
                    }
                }
            } else {
                foreach ($this->p as $jedan_proizvod) {
                    $jedan_proizvod->prikazi_proizvod();
                }
            }    
        }

        function prikazi_jedan_proizvod_detaljnije($id) {
            $k = count($this->p);

            for ($i = 0; $i < $k; $i++) {
                if($this->p[$i]->id == $id) {
                    $this->p[$i]->prikazi_proizvod_detaljnije();
                }
            }
        }
    }

    class WebSite {

        function header() {
            echo "<div style='text-align: center; background-color: gray;'>";
            echo "<h3><a href='index.php'>Dobro dosli u web-shop</a></h3>";
            echo "</div>";
        }

        function footer() {
            echo "<div style='text-align: center; color: yellowgreen; background-color: gray;'>";
            echo "<h5>Bolje vas nasli!</h5>";
            echo "</div>";
        }

        function meni($podaci) {
            $grupe = [];
            foreach ($podaci as $podatak) {
                array_push($grupe, $podatak['grupa']);
            }
            $grupe = array_unique($grupe);

            echo "Cokolade:<ul>";
            foreach ($grupe as $grupa) {
                echo "<li><a href='index.php?grupa=$grupa'>$grupa</a></li>";
            }
            echo "</ul>";
        }
    }

    $lp = new ListaProizvoda();
    $lp->dodaj_proizvode($podaci);
    $ws = new WebSite();
    
?>