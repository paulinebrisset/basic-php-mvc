<?php

namespace App\Controllers;

use App\Models\Table\ModelUtilisateurs;
// session_start();

class ConnexionController extends Controller{

    public function index (){
        $this->render('connection/index');
    }

    static function verifierUtilisateur(string $mail, string $mdp){
        $_SESSION['erreurMdp'] = false;
        $utilisateur = new ModelUtilisateurs;

        $cetUtilisateur = $utilisateur->findBy(['mail' => $mail, 'mdp' => $mdp]);
        echo ("Je passe par la fonction verifier utilisateur dans UtilisateursController");
        foreach ($cetUtilisateur as $utilisateurExiste) {

            if (($utilisateurExiste['mail'] == $mail) && ($utilisateurExiste['mdp'] == $mdp)) {
                $_SESSION['utilisateur'] = $utilisateurExiste;
                $_SESSION['erreurMdp'] = false;
                header("location:../index.php");
                exit();
            }
        //le mail ou le mdp ne correspond pas
        $_SESSION['erreurMdp'] = true;
        header("location:../index.php");
        }
    }

    static function isTheUserAnAdmin(){
        if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']['droit'] == true) {
            return true;
        } else {
            return false;
        }
    }

/*********** GESTION DE LA NAVBAR *********/

    static function pbDeMotDePasse(){
        if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp'] == true) {
            echo ("Problème d'authentification, veuillez réessayer");
        }
    }


    static function quelsBoutonsAfficher(){
        if (!(isset($_SESSION['utilisateur']))) {

        ?>
            <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#modalConnexion" href="./includes/modalConnexion.php">
                Connexion
            </button>
            <button type="button" class="btn btn-outline-dark my-2 my-sm-0 ml-3" data-toggle="modal" data-target="#modalCreerCompte" href="./includes/modalCreerCompte.php">
                Créer un compte
            </button>

        <?php } else { ?>

            <form method="post" action="./controllers/destructionVariables.php">
                <input type="submit" class="btn btn-outline-dark my-2 my-sm-0 ml-3" value="Déconnection">
            </form>
        <?php }
    }
}
