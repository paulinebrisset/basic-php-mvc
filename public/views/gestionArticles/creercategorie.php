<?php

use App\Controllers\GestionArticlesController;
use App\Controllers\CategoriesController;

$instanceCategoriesController = new CategoriesController;

if (isset($_POST['submit'])) {
    $gestionArticleController = new GestionArticlesController;
    $gestionArticleController->creerCat($_POST['nom'], $_POST['description']);
}
?>

<div class="container-fluid">
    <div class="row page">
        <h2>Créer une nouvelle catégorie</h2>
    </div>

    <form method="post" action="" class="col-12">
        <div class="row blanc">
            <div class="form-group  col-12">
                <label for="nom">Nom de la catégorie</label>
                <input type="text" class="form-control" name="nom" value="">
            </div>
            <div class="form-group  col-12">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="10"></textarea>
            </div>
        </div>
        <div class="row blanc">
            <div class="col-12">
                <button type="submit" class="btn btn-outline-dark" name="submit">Valider</button>
            </div>
        </div>
    </form>
</div>