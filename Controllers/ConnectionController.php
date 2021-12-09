<?php

namespace App\Controllers;
use App\Controllers\MainController;
use App\Models\Table\ModelUtilisateurs;

class ConnectionController extends Controller{


    public function verifierUtilisateur(string $mail, string $mdp){
        $_SESSION['erreurMdp'] = false;
       
        $utilisateur = new ModelUtilisateurs;
        $cetUtilisateur = $utilisateur->findBy(['mail' => $mail, 'mdp' => $mdp]);

        echo ("Je passe par la fonction verifier utilisateur dans ConnectionController");
        
        foreach ($cetUtilisateur as $utilisateurExiste) {

            if (($utilisateurExiste['mail'] == $mail) && ($utilisateurExiste['mdp'] == $mdp)) {
                $_SESSION['utilisateur'] = $utilisateurExiste;
                $_SESSION['erreurMdp'] = false;

                $newMain = new MainController;
                $newMain->render('main/index', [], 'home');
                exit();
            }
            //le mail ou le mdp ne correspond pas
            $_SESSION['erreurMdp'] = true;
            echo ("Pd d'authentification");
            $newMain = new MainController;
            $newMain->render('main/index', [], 'home');
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

    public function pbDeMotDePasse(){
        if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp'] == true) {
            echo ("Problème d'authentification, veuillez réessayer");
        }
    }


    public function quelsBoutonsAfficher(){
        if (!(isset($_SESSION['utilisateur']))) {

        ?>
            <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#modalConnexion" href="./includes/modalConnexion.php">
                Connexion
            </button>
            <button type="button" class="btn btn-outline-dark my-2 my-sm-0 ml-3" data-toggle="modal" data-target="#modalCreerCompte" href="./includes/modalCreerCompte.php">
                Créer un compte
            </button>

        <?php } else { ?>

            <form method="post" action="../Controllers/destructionVariables.php">
                <input type="submit" class="btn btn-outline-dark my-2 my-sm-0 ml-3" value="Déconnection">
            </form>
        <?php }
    }

    static function afficherLeTitre(){
        $titreParDefaut = 'Bonjour';
        //si la variable $_SESSION['user'] a été créée et qu'elle contient qqch, on affiche le nom renseigné par l'utilisateur, sinon on affiche le titre du site par défaut
        if (isset($_SESSION['utilisateur'])) {
            echo ($_SESSION['utilisateur']['nom'] != "" ? 'Bonjour ' . ucfirst($_SESSION['utilisateur']['nom']) : $titreParDefaut);
        } else {
            echo ($titreParDefaut);
        }
    }
}
