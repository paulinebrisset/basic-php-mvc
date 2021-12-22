<div class="container-fluid pageArticles">
    <div class="row page">
        <h2 class="titre">Categories</h2>
    </div>
    <div class="row page">
        <?php foreach ($categories as $categorie) { ?>

            <div class="card col-12 col-sm article">
                <h3 class="titre"><a href="/categories/lire/<?php echo $categorie["id_categorie"] ?>">
                        <?php echo ($categorie['nom_categorie']) ?></a></h3>
                <p><?php echo ($categorie['description_categorie']) ?></p>
            </div>
        <?php } ?>
        <?php

        use App\Models\Table\ModelItems;

        $articleinexistant = new ModelItems;
        //On va chercher toutes les annonces publiées grâce à une méthode du Modèle
        $articles = $articleinexistant->findBy(['publie' => 8]);
        /*
        Là c'est une méthode de Controller. On lui file  
        1 - le nom du fichier qui va ouvrir les résultats
        et 2- la varibale qui contient la requête qui contient les données que l'on veut afficher
        render se chargera de générer la vue
        */

        ?>
    </div>
</div>