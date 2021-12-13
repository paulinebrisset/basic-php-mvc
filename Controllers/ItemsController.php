<?php
namespace App\Controllers;
use App\Models\Table\ModelItems;

class ItemsController extends Controller{

    public function index(){
    /*
        M : affiche une page listant toutes les annonces de la base de données
        I : rien
        Bonus : toutes les variables que je voudrais créer ici seront accessibles depuis le include de juste en dessous
        include_once ROOT.'/views/items/index.php';
    */

        //instancier la classe ModelItems
        $articlesModel = new ModelItems;
        //On va chercher toutes les annonces publiées grâce à une méthode du Modèle
        $articles=$articlesModel->findBy(['publie'=>1]);
        /*
        Là c'est une méthode de Controller. On lui file  
        1 - le nom du fichier qui va ouvrir les résultats
        et 2- la varibale qui contient la requête qui contient les données que l'on veut afficher
        render se chargera de générer la vue
        */

        $this->render('items/index',['articles'=>$articles]);
    }
    /**
     * M Méthode permettant d'afficher un article à partir de son slug
     * I @param int $id
     * O @return void
     */

    
     public function lire(int $id = 1){
        // On instancie le modèle
        $instanceModel = new ModelItems;

        // On récupère les données
        $item = $instanceModel->find($id);

        $this->render('items/lire', compact('item'));
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }
}