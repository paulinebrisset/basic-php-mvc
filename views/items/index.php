<h2>Page des articles (views>items>index.php)</h2>
<?php foreach ($articles as $article){?>
<div class="container">
    <div class="row">
        <div class="card col-12 col-sm article">
            <h3><a href="/item/lire/<?php echo $article["id"]?>">
                <?php echo ($article['titre'])?></a></h3>

            <p><?php echo ($article['description']) ?></p>

            <?php } ?>
        </div>
    </div>
</div>