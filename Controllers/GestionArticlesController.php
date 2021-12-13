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
    public function modifier(int $id = 1){
        // On instancie le modèle
        $instanceModel = new ModelItems;

        // On récupère les données
        $item = $instanceModel->find($id);

        $this->render('gestionArticles/modifier', compact('item'));
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }
    public function actualiserArticle(int $id, string $titre, string $description, $prix){
        $instanceGestionArticleController= new GestionArticlesController;
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

        $instanceGestionArticleController->index();
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }
// public function changerPublication () {
//     $articles = new ModelItems;
//     $_POST["publie"]
   
//     $articles['id']
//     $articles['publie']
//     $articlesModel = new ModelItems;
//     public function update(int $id, Model $model),
// }
}
  ?>