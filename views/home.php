<!DOCTYPE html>
<html lang="fr">

<?php include '../views/includes/head.php'?>

<body>
    <h3>Page Home</h3>
<div class="text-center">
    <a href="/public/items" class="btn btn-dark">Voir tous nos articles</a> 
</div>

    <div class="container">
        <?= $content ?>
    </div>
<?php echo ("var_dump de session erreur mdp dans dans home.php");
var_dump($_SESSION['erreurMdp'])?>
<?php include '../views/includes/js.php'?>
</body>
<?php include '../views/includes/footer.php' ?>
</html>