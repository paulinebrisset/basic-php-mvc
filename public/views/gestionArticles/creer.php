<?php

use App\Controllers\GestionArticlesController;

if (isset($_POST['submit']) && isset($_POST['titre'])) {
    $gestionArticleController = new GestionArticlesController;
    $gestionArticleController->creerArticle($_POST['titre'], $_POST['description'], $_POST['prix'], $_POST['publie'], $_POST['categorie']);
}
?>

<div class="container-fluid">
    <div class="row page">
        <h2>Créer un nouvel article</h2>
    </div>
    <div class="row blanc">
        <form method="post" action="" class="col-12">
            <div class="form-group">
                <label for="titre">Nom de l'article</label>
                <input type="text" class="form-control" name="titre" value="">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="10"></textarea>
            </div>
    </div>
    <div class="row blanc">
        <div class="col-12 col-sm-3">
            <div class="form-group">
                <label for="publie">Visibilité</label>
                <select class="form-control" name="publie">
                    <option value="1">Publié</option>
                    <option value="0">Masqué</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <select class="form-control" name="categorie">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text" class="form-control" name="prix" placeholder="">
            </div>
        </div>
    </div>
    <div class="row blanc">
        <div class="col-12">
            <button type="submit" class="btn btn-outline-dark" name="submit">Valider</button>
        </div>
    </div>
    </form>
</div>