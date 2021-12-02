<?php
session_start();

/*********************PRESENTATION ******************/

/**AFFICHAGE DES BOUTONS CONNEXION/CREER UN COMPTE *****/

function quelsBoutonsAfficher() {
    if (!(isset($_SESSION['nom']))) {

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

/**AFFICHAG Haut gauche titre site *****/
function afficherLeTitre()
{
    $titreParDefaut = 'Mon beau site';
    if (isset($_SESSION['nom'])) {

        echo ($_SESSION['nom'] != "" ? 'Bonjour ' . ucfirst($_SESSION['nom']) : $titreParDefaut);

    } else {
        echo ($titreParDefaut);
    }
}

/**Affiche message erreur si pb login *****/

function pbDeMotDePasse () {
    if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp']==true) {
        echo ("Problème d'authentification, veuillez réessayer");
    }
}
function verifierErreurMdp(){
    if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp']==true) {
        echo ("<script>$('#modalConnexion').modal()</script>");
    }
}

?>