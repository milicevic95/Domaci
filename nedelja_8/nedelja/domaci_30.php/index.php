<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista proizvoda</title>
    </head>

    <body>
        <?php

            include_once ("Proizvod.php");
            include_once ("podaci.php");

            $ws->header();
            $ws->meni($podaci);

            echo "<div style='text-align: center'>";
            if(!isset($_GET['grupa'])){
                $lp->prikazi_sve_proizvode();
            } else {
                $grupa = $_GET['grupa'];
                $lp->prikazi_sve_proizvode($grupa);
            }
            echo "</div>";
            
            $ws->footer();

        ?>
    </body>
</html>