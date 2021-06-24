<?php

    include_once ("klasa_korpa.php");
    include_once ("klasa_baza.php");

    if (isset($_GET['akcija']) AND $_GET['akcija'] == 'dodaj') {
        $id = $_GET['id_proizvoda'];
        $proizvod = $b->daj_proizvod($id);
        $korpa->dodaj_proizvod($id, $proizvod['naziv'], $proizvod['cena'], 1);
        $korpa->prikazi();
    }
    
?>