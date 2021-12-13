<?php
namespace App\Controllers;
use App\Models\Table\ModelItems;

class GestionArticlesController extends Controller{

  
public function index(){
    /*
        M : affiche une page listant toutes les annonces de la base de données (version tableau)
        I : rien
        Bonus : toutes les variables que je voudrais créer ici seront accessibles depuis le include de juste en dessous
        include_once ROOT.'/views/items/index.php';
    */

        //instancier la classe ModelItems
        $articlesModel = new ModelItems;
        //On va chercher toutes les annonces publiées grâce à une méthode du Modèle
        $articles=$articlesModel->findAll();
        /*
        Là c'est une méthode de Controller. On lui file  
        1 - le nom du fichier qui va ouvrir les résultats
        et 2- la varibale qui contient la requête qui contient les données que l'on veut afficher
        render se chargera de générer la vue
        */

        $this->render('gestionArticles/index',['articles'=>$articles]);
    }

/****Affiche d'article à modifier */
    public function editer(int $id = 1){
        // On instancie le modèle
        $instanceModel = new ModelItems;

        // On récupère les données
        $item = $instanceModel->find($id);

        $this->render('gestionArticles/editer', compact('item'));
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }
/****Création d'un nouveal article */
    public function creer(int $id = 1){
        $this->render('gestionArticles/creer');
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }
    public function actualiserArticle(int $id, string $titre, string $description, $publie, $prix){
       
        // On instancie le modèle items
        $instanceItem = new ModelItems;
        // appel à la mdification 
        if (isset($_POST['publie'])){
            $publie = true;
        } else {
            $publie = false;
        }

        $instanceItem-> setTitre ($titre);
        $instanceItem-> setDescription ($description);
        $instanceItem-> setPrix ($prix);
        $instanceItem-> setPublie($publie);
        
        $instanceItem->update($id,$instanceItem);
        
        // $instanceGestionArticleController= new GestionArticlesController;
        // $instanceGestionArticleController->index();
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }

    public function creerArticle(string $titre, string $description, $prix, $publie, $categorie){
        // On instancie le modèle items
        $instanceItem = new ModelItems;
        // appel à la mdification 
        if ($publie == "true"){
            $publie = true;
            echo ("oui");
        } else {
            $publie = false;
            echo"non";
        }
        $mesDonnees = [
        'titre'=> $titre,
        'description'=> $description,
        'prix'=> $prix,
        'publie'=> $publie,
        'categorie'=>$categorie
        ];

        $monObjetRequete = new ModelItems;
        $grandfinal=$monObjetRequete->creer($mesDonnees);

    }
}
  ?>