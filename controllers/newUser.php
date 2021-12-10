<?php
include './../database/connexion.php';
session_start();

// preparation de la requête sql d'enregistrement d'un nouvel utilisateur
$preRequeteSql  = 'INSERT INTO utilisateurs (nom, mail, mdp, droit) VALUES(?,?, ?,false);';	
$_SESSION["nom"] = $_POST['nom'];
$_SESSION["mail"] = $_POST['mail'];
$_SESSION["mdp"] = $_POST['mdp'];

$monUtilisateur = new User ($_POST['nom'], $_POST['mail'], $_POST['mdp'], false);
//j'appelle une méthode de la classe User qui correspond à executerLaRequette
$monUtilisateur->enregistrerUnNouvelUtilisateurDansLaBdd ($_POST['nom'], $_POST['mail'], $_POST['mdp'], false);

// si c'est une connexion, je crée une instance et je le check, si c'est une instance, je crée une instance et je l'enregistre

// executerLaRequete () ;
// // verifierLaBonneExecutionDeLaRequete ();


// function executerLaRequete() {
//     global $instancePdo;
//     global $preRequeteSql;;
//     //je prépare ma requête avec une instance de PDO créée dans logInDatabase.php
//     $maRequete= $instancePdo->prepare($preRequeteSql);
//     //je lui fournis les données saisies dans le formulaire
//     $maRequete->execute(array($_SESSION["nom"] , $_SESSION["mail"], $_SESSION["mdp"] ));
// }

// function quiEstLeDernierUtilisateur(){
//     global $instancePdo;
//     $requeteDernierUtilisateur = 'SELECT id FROM utilisateurs WHERE id=(SELECT max(id) FROM utilisateurs);';
//     $dernierUtilisateur = $instancePdo->query($requeteDernierUtilisateur);
//     $resultat = $dernierUtilisateur->fetch();
//     return $resultat['id'];
// }

// function verifierLaBonneExecutionDeLaRequete (){
//     global $instancePdo;
//     $preRequeteVerification ='SELECT * from utilisateurs where id=?';
//     //preparer la requête
//     $preparation = $instancePdo->prepare($preRequeteVerification);
//     //charger le paramètre
//     $parametre=quiEstLeDernierUtilisateur();
//     //executerLaRequette la requête
//     $preparation->execute(array($parametre));
//     //capter le résultat de la requête
//     $retour= $preparation->fetchAll(PDO::FETCH_ASSOC);
//     //publier le résultat de la requête
//     foreach ($retour as $nouveauMembre) {
//         echo ("J'ai un nouvel utilisateur, il s'appelle ".$nouveauMembre['nom']." et je connais son mot de passe : ".$nouveauMembre['mdp']);
//     }		
// }

header ("location:logIn.php");
exit;

?>
