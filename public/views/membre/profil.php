<h2 class="titre"><?= $membre["nom"] ?></h2>
<div class="card">
    <div class="titre">
    <h4 class="prix"><?= $membre["role"] ?></h4>
        <img class="img-fluid" src="<?php echo '../../views/includes/assets/pictures/' . $membre['photo'] ?>" alt="cet membre est à vendre">
        
        <p><?= $membre["description"] ?></p>
       
        <a class="enSavoirPlus" href="items/lire/<?php echo $membre["id_utilisateur"] ?>">Voir les produits</a>
    </div>
</div>