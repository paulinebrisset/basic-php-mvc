<!DOCTYPE html>
<html lang="fr">

<?php include($_SERVER['DOCUMENT_ROOT'] . '/views/includes/head.php') ?>

<body>
    <div class="container-fluid pageArticles">
        <div class="row page">
            <h2>Bienvenue</h2>
        </div>
        <div class="row page">
            <div class="text-center">
                <a href="items" class="btn btn-dark ">Voir tous nos articles</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php echo $content ?>
    </div>
</body>
</html>