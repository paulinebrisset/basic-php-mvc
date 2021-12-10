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
}
  ?>