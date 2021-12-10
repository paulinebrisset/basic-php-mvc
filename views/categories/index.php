<h2>Categories</h2>
<div class="container">
    <div class="row">
        <?php foreach ($categories as $categorie) { ?>

            <div class="card col-12 col-sm article">
                <h3><a href="categories/lire/<?php echo $categorie["id"] ?>">
                        <?php echo ($categorie['titre']) ?></a></h3>
              

                <p><?php echo ($categorie['description']) ?></p>
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