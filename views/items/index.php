<h2>Items</h2>
<div class="container">
    <div class="row">
        <?php foreach ($articles as $article) { ?>

            <div class="card col-12 col-sm article">
                <h3><a href="items/lire/<?php echo $article["id"] ?>">
                        <?php echo ($article['titre']) ?></a></h3>
                <h4><?php echo ($article['prix'] . '€') ?></h4>

                <p><?php echo ($article['description']) ?></p>
            </div>
        <?php } ?>

    </div>
</div>