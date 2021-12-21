<h2 class="titre"><?= $item["titre"] ?></h2>
<article class="card">
    <div class="titre">
        <img class="img-fluid" src="<?php echo '../../views/includes/assets/pictures/' . $item['image'] ?>" alt="cet article est à vendre">
        <p><?= $item["description"] ?></p>
        <h4 class="prix"><?= $item["prix"] . "€" ?></h4>
        <a class="enSavoirPlus" href="items/lire/<?php echo $article["id_item"] ?>">Acheter maintenant</a>
    </div>
</article>