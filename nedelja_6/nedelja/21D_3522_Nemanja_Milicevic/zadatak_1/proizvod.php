<style>
    div {
        width: 200px;
        display: inline-block;
        text-align: center;
    }

    img {
        width: 200px;
        height: 200px;
        border: 1px solid black;
    }

    .red {
        color: red;
    }

    .green {
        color: green;
        font-weight: bold;
    }
</style>

<?php

    function proizvod($ime, $slika, $cena, $popust = 0) {
        echo "<div>";
        echo "<img src='$slika' alt='Proizvod' />";
        echo "<h3>$ime</h3>";

        if ($popust > 0) {
            $nova_cena = $cena - ($cena * ($popust / 100));
            echo "<p class='red'>$cena RSD</p>";
            echo "<p class='green'>$nova_cena RSD</p>";
        } else {
            echo "<p>$cena RSD</p>";
            echo "<p>(bez popusta)</p>";
        }
        echo "</div>";
    }

?>