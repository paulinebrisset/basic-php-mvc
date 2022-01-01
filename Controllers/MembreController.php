<?php
namespace App\Controllers;
use App\Models\Table\ModelUtilisateurs;

class MembreController extends Controller{

    public function index(){
    /*
        M : affiche toutes les informations relatives à un membre
        O: affiche une vue
        I: rien
    */
        // On instancie le modèle
        $instanceModel = new ModelUtilisateurs;

        // On récupère les données
        $membre = $instanceModel->find($_SESSION['utilisateur']['id_utilisateur']);

        $this->render('membre/profil', compact('membre'));
        /* Dernière ligne qu'on aurait aussi bien pu écrire
            $this->render('torrefacteurs/index',['membre'=>$membre]);
        */
    }
    
   
}