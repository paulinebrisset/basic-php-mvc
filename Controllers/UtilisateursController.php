<?php
namespace App\Controllers;
use App\Models\Table\ModelUtilisateurs;

class UtilisateursController extends Controller{

    public function index(){
    /*
        M : affiche une page listant toutes les annonces de la base de données
        I : rien
        Bonus : toutes les variables que je voudrais créer ici seront accessibles depuis le include de juste en dessous
        include_once ROOT.'/views/utilisateurs/index.php';
    */

        //instancier la classe ModelUtilisateurs
        $articlesModel = new ModelUtilisateurs;
        //On va chercher toutes les annonces publiées grâce à une méthode du Modèle
        $condition = ('order by id_utilisateur desc');
        $articles=$articlesModel->findBy(['publie'=>1], $condition);
        /*
        Là c'est une méthode de Controller. On lui file  
        1 - le nom du fichier qui va ouvrir les résultats
        et 2- la varibale qui contient la requête qui contient les données que l'on veut afficher
        render se chargera de générer la vue
        */

        $this->render('utilisateurs/index',['articles'=>$articles]);
    }
    /**
     * M Méthode permettant d'afficher un article à partir de son slug
     * I @param int $id
     * O @return void
     */

    
     public function lire(int $id = 1){
        // On instancie le modèle
        $instanceModel = new ModelUtilisateurs;

        // On récupère les données
        $utilisateur = $instanceModel->find($id);

        $this->render('utilisateurs/lire', compact('utilisateur'));
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('utilisateurs/index',['utilisateur'=>$utilisateur]);
        */
    }
    
    public function afficherLaCategorie($id){
        $instanceMI = new ModelUtilisateurs;
        $catArticle = $instanceMI->findColumn('categorie', $id);
        return $catArticle['nom_categorie'];
    }
}