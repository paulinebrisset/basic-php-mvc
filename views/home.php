    <!DOCTYPE html>
    <html lang="fr">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/includes/head.php') ?>

    <body>
        <h2>Bienvenue</h2>
        <div class="text-center">
            <a href="items" class="btn btn-dark ">Voir tous nos articles</a>
        </div>

        <div class="container-fluid">
            <?= $content ?>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/includes/js.php') ?>
    </body>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php') ?>

    </html>