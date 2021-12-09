<!DOCTYPE html>
<html lang="fr">

<?php include '../views/includes/head.php'?>

<body>
    <h2>Page default</h2>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mes annonces</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/annonces">Liste des annonces</a>
            </li>
        </ul>
    </div>
</nav> -->

    <div class="container">
        <?= $content ?>
    </div>

<?php include '../views/includes/js.php'?>
</body>
<?php include '../views/includes/footer.php' ?>
</html>