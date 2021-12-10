<?php
namespace App\Controllers;
use App\Models\Table\ModelCategorie;

class CategoriesController extends Controller{

    public function index(){
    /*
        M : affiche une page listant toutes les annonces de la base de données
        I : rien
        Bonus : toutes les variables que je voudrais créer ici seront accessibles depuis le include de juste en dessous
        include_once ROOT.'/views/items/index.php';
    */

        //instancier la classe ModelItems
        $instanceCategorie = new ModelCategorie;
        //On va chercher toutes les annonces publiées grâce à une méthode du Modèle
        $categories=$instanceCategorie->findAll();
        /*
        Là c'est une méthode de Controller. On lui file  
        1 - le nom du fichier qui va ouvrir les résultats
        et 2- la varibale qui contient la requête qui contient les données que l'on veut afficher
        render se chargera de générer la vue
        */

        $this->render('categories/index',['categories'=>$categories]);
    }
    /**
     * M Méthode permettant d'afficher un article à partir de son slug
     * I @param int $id
     * O @return void
     */
 
    public function lire(int $id=0){
        // On instancie le modèle
        $instanceCategorie = new ModelCategorie;

        // On récupère les données
        $categorie = $instanceCategorie->find($id);

        $this->render('categorie/lire', compact('categorie'));
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('items/index',['item'=>$item]);
        */
    }
}