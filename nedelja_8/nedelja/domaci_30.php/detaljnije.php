<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detaljnije o izabranom proizvodu</title>
    </head>

    <body>
        <?php

            if(!isset($_GET['id'])){
                die("Trazite nepostojecu stranicu!");
            }
            $id =  $_GET['id'];

            include_once ("Proizvod.php");
            include_once ("podaci.php");

            $ws->header();
            $ws->meni($podaci);

            echo "<div style='text-align: center'>";
            $lp->prikazi_jedan_proizvod_detaljnije($id);
            echo "</div>";
            
            $ws->footer();
        ?>
    </body>
</html>