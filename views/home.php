<!DOCTYPE html>
<html lang="fr">

<?php

use App\Controllers\ConnectionController;

include '../views/includes/head.php'?>

<body>
    <h2>Home</h2>
<div class="text-center">
    <a href="items" class="btn btn-dark">Voir tous nos articles</a> 
</div>

    <div class="container">
        <?= $content ?>
    </div>
    <?php echo ("<br/>var_dump de session erreur mdp dans dans home.php<br/>");
var_dump($_SESSION['erreurMdp'])?>


<?php 
$essaiConnexion = new ConnectionController;
$essaiConnexion->pbDeMotDePasse() ?>
<?php include '../views/includes/js.php'?>
</body>
<?php include '../views/includes/footer.php' ?>
</html>