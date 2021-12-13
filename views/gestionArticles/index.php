<h2>Gérer mes articles</h2>

<div class="container">
    <div class="row">
        <form method="post" action="gestionArticles/creer"><input type="submit" class="btn btn-outline-dark" value="Modifier">
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr class="table-active">
                    <th scope="col">Numéro</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Etat de publication</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) {
                    if ($article['publie'] == 0) {
                        echo ('<tr class="table-danger">'); ?>

                        <th scope="row"><?php echo $article['id'] ?></th>
                        <td><?php echo $article['titre'] ?></td>
                        <td><?php echo $article['categorie'] ?></td>
                        <td><input type="checkbox" data-toggle="toggle" data-size="mini" data-on="Publié" data-off="Masqué" data-onstyle="info" data-offstyle="default" name="publication"></td>
                        <td>
                            <form method="post" action="gestionArticles/editer/<?php echo $article["id"] ?>"><input type="submit" class="btn btn-outline-danger" value="Modifier">
                        </td>
                        </tr>
                    <?php
                    } else {
                        echo ("<tr>"); ?>
                        <th scope="row"><?php echo $article['id'] ?></th>
                        <td><?php echo $article['titre'] ?></td>
                        <td><?php echo $article['categorie'] ?></td>
                        <td>
                            <input type="checkbox" checked data-toggle="toggle" data-size="mini" data-on="Publié" data-off="Masqué" data-onstyle="default" data-offstyle="danger" name="publication">
                        </td>
                        <td>
                            <form method="post" action="gestionArticles/editer/<?php echo $article["id"] ?>"><input type="submit" class="btn btn-outline-dark" value="Modifier">
                        </td>
                        </tr>
                    <?php } ?>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>