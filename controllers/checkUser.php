<?php/*
///activer les variables de session
session_start();
//se préconnecter à la database
include './../database/connexion.php';

$_SESSION["mail"] = $_POST['email'];
$_SESSION["mdp"] = $_POST['emdp'];
$_SESSION['erreurMdp']=false;

// preparation de la requête sql d'enregistrement d'un nouvel utilisateur
$preRequeteCheckMail  = 'SELECT mail FROM utilisateurs';	
$preRequeteCheckMdp  = 'SELECT * FROM utilisateurs WHERE mail=?';

//on lance la vérification
checkerLeMail();

function checkerLeMail(){

    global $instancePdo;
    global $preRequeteCheckMail;

    //lancement de la requête
    $requeteCheckMail = $instancePdo->query($preRequeteCheckMail);
    $listeUtilisateurs=$requeteCheckMail->fetchAll();

    //on cherche un mail correspondant dans les résultats de la requête
    foreach ($listeUtilisateurs as $mailExiste){

        if ($mailExiste['mail'] == $_SESSION["mail"]){
            checkerLeMdp ();
            die();
        }
    }
    //si on a vérifié tous les mails enregistrés et qu'aucun d'eux ne correspond à la saisie
    erreur();
}

//on entre que si le mail est déjà OK
function checkerLeMdp () {
    global $instancePdo;
    global $preRequeteCheckMdp;
    
   // global $erreurMdp;

    //on prépare la requête
   $requeteCheckMdp = $instancePdo->prepare($preRequeteCheckMdp);
    //on l'éxécute avec notre paramètre
   $requeteCheckMdp->execute(array($_SESSION["mail"]));	
	//je récupère les résultats dans un tableau
	$monMdp= $requeteCheckMdp->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($monMdp as $leBonMdp){
        //si on trouve le bon, pour le moment on repart sur index
        if ($leBonMdp["mdp"]==$_SESSION["mdp"]) {
            //enregistrer toutes les données de l'utilisateur dans une variable de session
            $_SESSION['user']=$leBonMdp;
            $_SESSION['erreurMdp']=false;
            header ("location:../index.php");
            exit();
        }
    }
    //le mdp ne correspond pas
    erreur();
}

function erreur () {
    $_SESSION['erreurMdp']=true;
    header ("location:../index.php");
}
header ("location:../index.php");
*/
?>