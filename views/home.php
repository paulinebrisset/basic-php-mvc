<!DOCTYPE html>
<html lang="fr">

<?php include '../views/includes/head.php' ?>

<body>
    <h2>Home</h2>
    <div class="text-center">
        <a href="items" class="btn btn-dark">Voir tous nos articles</a>
    </div>

    <div class="container">
        <?= $content ?>
    </div>

    <?php include '../views/includes/js.php' ?>
</body>
<?php include '../views/includes/footer.php' ?>

</html>