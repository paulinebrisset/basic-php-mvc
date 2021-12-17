<div class="container">
    <div class="row  page">
        <h2>Gérer mes articles</h2>
        <a class="btn btn-outline-light" id="btnCreerArticle" href="gestionArticles/creer">Créer un nouvel article</a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr class="table-active">
                    <th scope="col">Numéro</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Etat de publication</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) {
                    if ($article['publie'] === 0) {
                        echo ('<tr class="table-danger">'); ?>
                        <th scope="row"><?php echo $article['id_item'] ?></th>
                        <td><?php echo $article['titre'] ?></td>
                        <td><img class="img-thumbnail" src="<?php echo '/views/includes/assets/pictures/' . $article['image'] ?>" alt="cet article est à vendre"></td>
                        <td><?php echo ['id_categorie'] ?></td>
                        <td><input type="checkbox" data-toggle="toggle" data-size="mini" data-on="Publié" data-off="Masqué" data-onstyle="info" data-offstyle="default" name="publie"></td>
                        <td>
                            <form method="post" action="gestionArticles/editer/<?php echo $article["id_item"] ?>"><input type="submit" class="btn btn-outline-danger" value="Modifier"></form>
                        </td>
                        </tr>
                    <?php
          
                } else {
                        echo ("<tr>"); ?>
                        <th scope="row"><?php echo $article['id_item'] ?></th>
                        <td><?php echo $article['titre'] ?></td>
                        <td><img class="img-thumbnail" src="<?php echo '/views/includes/assets/pictures/' . $article['image'] ?>" alt="cet article est à vendre"></td>
                        <td><?php echo $article['id_categorie'] ?></td>
                        <td>
                            <input type="checkbox" checked data-toggle="toggle" data-size="mini" data-on="Publié" data-off="Masqué" data-onstyle="default" data-offstyle="danger" name="publie">
                        </td>
                        <td>
                            <form method="post" action="gestionArticles/editer/<?php echo $article["id_item"] ?>"><input type="submit" class="btn btn-outline-dark" value="Modifier"></form>
                        </td>
                        </tr>
                    <?php } ?>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>