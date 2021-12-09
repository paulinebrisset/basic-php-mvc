<?php
session_start();

/*********************Gestion de l'affichage / présentation barre de navigation et head  ******************/

/**AFFICHAGE DES BOUTONS CONNEXION/CREER UN COMPTE *****/

function quelsBoutonsAfficher() {
    if (!(isset($_SESSION['user']))) {

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

/****** AFFICHAGE BONJOUR/TITRE SITE *****/
function afficherLeTitre(){
    $titreParDefaut = 'Mon beau site';
    //si la variable $_SESSION['user'] a été créée et qu'elle contient qqch, on affiche le nom renseigné par l'utilisateur, sinon on affiche le titre du site par défaut
    if (isset($_SESSION['user'])) {
        echo ($_SESSION['user']['nom'] != "" ? 'Bonjour ' . ucfirst($_SESSION['user']['nom']) : $titreParDefaut);
    } else {
        echo ($titreParDefaut);
    }
}

/** Gestion affichage si erreur de connexion *****/

// function pbDeMotDePasse () {
//     if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp']==true) {
//         echo ("Problème d'authentification, veuillez réessayer");
//     }
// }
function verifierErreurMdp(){
    if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp']==true) {
        echo ("<script>$('#modalConnexion').modal()</script>");
    }
}

/***************ADAPTATION DU SITE SELON  LES DROITS DE LUTILISATEUR *************/
function isTheUserAnAdmin () {
    if (isset($_SESSION['user']) && $_SESSION['user']['droit']==true) {
        return true;
    } else {
        return false;
    }
}

function barreDeNavigationComplete () {
    if (isTheUserAnAdmin()==true){
        echo('
        <li class="nav-item">
            <a class="nav-link" href="./articles.php">Articles</a>
        </li>');
    } 
}
/*************************TESTS **********************************/