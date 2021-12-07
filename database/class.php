<?php
   session_start();
   
class Connexion {
        //----------------------------- parametrage accès à cette database
    private $host 	= 'localhost'	;
    private $dbname  = 'utilisateurs' 		;
    private $usrBdd	= 'dwwm_2021' 		;
    private $pwdBdd	= 'Afpar2021!' 			;
    //----------------------------- /parametrage 
    private $adresseBdd = 'mysql:host='.$host.';dbname='.$dbname.';charset=utf8;' ;   

    public function getinstancePdo () {
//je tente une connexion à la database. Intance PDO crée si OK, message d'erreur sinon
        try { 
            // instance de pdo identifiant la database visée
            $instancePdo= new PDO( $adresseBdd, $usrBdd, $pwdBdd );
        } catch (Exception $e) { 
            die('Erreur fatale : ' . $e->getMessage());
        }
        return $this-> $instancePdo;
    }
}
$connexion= new Connexion;
$SESSION['monInstancePdo']=getinstancePdo();
class User {
    public $nom;
    public $mail;
    public $password;
    public $droit;

    public function __construct($nom, $mail, $password, $droit) {
        $this-> nom=$nom;
        $this->mail=$mail;
        $this->password=$password;
        $this->droit=$droit;
    } 

    public function enregistrerUnNouvelUtilisateurDansLaBdd ($nom, $mail, $mdp, $droit) {
        // preparation de la requête sql d'enregistrement d'un nouvel utilisateur
        $preRequeteSql  = 'INSERT INTO utilisateurs (nom, mail, mdp, droit) VALUES(?,?, ?,?);';	
        //j'utilise une méthode de la classe Connexion
        $connexion=getinstancePdo ();
        $requeteEnregistrement= $connexion->prepare($preRequeteSql);
        $requeteEnregistrement->execute(array($nom,$mail, $mdp, $droit));
    }

    public function logIn ($mail, $mdp){
        $connexion = getinstancePdo();
        $preRequeteCheckMail  = 'SELECT mail FROM utilisateurs';
        //lancement de la requête
        $requeteCheckMail = $connexion->query($preRequeteCheckMail);
        $listeUtilisateurs=$requeteCheckMail->fetchAll();
        
        //on cherche un mail correspondant dans les résultats de la requête
        foreach ($listeUtilisateurs as $mailExiste){

            if ($mailExiste['mail'] == $mail){
                checkerLeMdp ($mdp);
                die();
            }
        }
        //on entre que si le mail est déjà OK
            function checkerLeMdp ($mdp) {
                $preRequeteCheckMdp  = 'SELECT * FROM utilisateurs WHERE mail=?';
            
                //on prépare la requête
            $requeteCheckMdp = $connexion->prepare($preRequeteCheckMdp);
                //on l'éxécute avec notre paramètre
            $requeteCheckMdp->execute(array($mdp));	
                //je récupère les résultats dans un tableau
                $monMdp= $requeteCheckMdp->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($monMdp as $leBonMdp){
                    //si on trouve le bon, pour le moment on repart sur index
                    if ($leBonMdp["mdp"]==$mdp) {    
                        //false c'est pour remplacer $_SESSION['erreurMdp']=false;
                        return ($leBonMdp, false)
                        exit();
                    }
                }
                //le mdp ne correspond pas
                erreur();
            }
    }
        
        function erreur () {
            $_SESSION['erreurMdp']=true;
            header ("location:../index.php");
        }
        header ("location:../index.php");
        
        ?>
            }


    }


    
    
        
    }
}
?>
