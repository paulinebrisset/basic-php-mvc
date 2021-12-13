<?php

use App\Controllers\GestionArticlesController;

if (isset($_POST['submit'])) {
    $gestionArticleController = new GestionArticlesController;
    $gestionArticleController->actualiserArticle(($item["id"]),$_POST['titre'],$_POST['description'],$_POST['prix']);
}
?>

<h2>Modifier un article</h2>
<article>
    <form method="post" action="">
        <div class="form-group">
            <label for="titre">Nom de l'article</label>
            <input type="text" class="form-control" name="titre" value="<?= $item["titre"] ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="10"><?= $item["description"] ?></textarea>
        </div>
        <div class="form-group">
            <label for="publie">Visibilité</label>
            <select class="form-control" name="publie">
                <option>Publié</option>
                <option>Masqué</option>
            </select>
            <input type="checkbox" checked data-toggle="toggle" data-size="mini" data-on="Publié" data-off="Masqué" data-onstyle="info" data-offstyle="default" name="publication">
        </div>
        <div class="form-group">
            <label for="categorie">Catégorie</label>
            <select class="form-control" id="categorie">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" name="prix" placeholder="<?= $item["prix"] . "€" ?>">
        </div>
        <button type="submit" class="btn btn-outline-dark" name="submit">Valider</button>
    </form>
</article>