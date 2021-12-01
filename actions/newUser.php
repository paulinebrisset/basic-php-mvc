<?php
include './logInDatabase.php';

// preparation de la requête sql d'enregistrement d'un nouvel utilisateur
$preRequeteSql  = 'INSERT INTO utilisateurs (nom, mdp) VALUES(?,?);';	
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];



executerLaRequete () ;
verifierLaBonneExecutionDeLaRequete ();

function executerLaRequete() {
    global $instancePdo;
    global $preRequeteSql;
    global $nom;
    global $mdp;
    //je prépare ma requête avec une instance de PDO créée dans logInDatabase.php
    $maRequete= $instancePdo->prepare($preRequeteSql);
    //je lui fournis les données saisies dans le formulaire
    $maRequete->execute(array($nom, $mdp));
}

function quiEstLeDernierUtilisateur(){
    global $instancePdo;
    $requeteDernierUtilisateur = 'SELECT id FROM utilisateurs WHERE id=(SELECT max(id) FROM utilisateurs);';
    $dernierUtilisateur = $instancePdo->query($requeteDernierUtilisateur);
    $resultat = $dernierUtilisateur->fetch();
    return $resultat['id'];

}

function verifierLaBonneExecutionDeLaRequete (){
    global $instancePdo;
    $preRequeteVerification ='SELECT * from utilisateurs where id=?';
    //preparer la requête
    $preparation = $instancePdo->prepare($preRequeteVerification);
    //charger le paramètre
    $parametre=quiEstLeDernierUtilisateur();
    //executer la requête
    $preparation->execute(array($parametre));
    $retour= $preparation->fetchAll(PDO::FETCH_ASSOC);

    foreach ($retour as $nouveauMembre) {
        echo ("J'ai un nouvel utilisateur, il s'appelle ".$nouveauMembre['nom']." et je connais son mot de passe : ".$nouveauMembre['mdp']);
    }		
}

?>
