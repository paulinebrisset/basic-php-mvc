<!DOCTYPE html>
<html lang="fr">

<?php include '../views/includes/head.php'?>

<body>
    <h2>Default</h2>
    <?php var_dump($_SESSION['erreurMdp']);?>
    <div class="container">
        <?= $content ?>
    </div>

<?php include '../views/includes/js.php'?>
</body>
<?php include '../views/includes/footer.php' ?>
</html>