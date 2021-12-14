<div class="container-fluid pageArticles">
    <div class="row page">
        <h2 class="titre">Nos articles</h2>
    </div>
    <div class="row">
        <?php foreach ($articles as $article) { ?>

            <div class="card col-12 col-sm-2 col-md article">
                <h3 class="titre"><?php echo ($article['titre']) ?></h3>
                <h4 class="prix"><?php echo ($article['prix'] . '€') ?></h4>

                <p><?php echo ($article['description']) ?></p>
                <a class="enSavoirPlus" href="items/lire/<?php echo $article["id"] ?>">En savoir plus</a>
            </div>
        <?php } ?>

    </div>
</div>