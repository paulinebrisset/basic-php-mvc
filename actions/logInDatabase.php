<?php
// approche procédurale, non-POO proposée dans ce tuto
// https://youtu.be/nu2m9HaeVV4?t=1342

//----------------------------- parametrage accès à cette database
$host 	= 'localhost'	;
$dbname  = 'utilisateurs' 		;
$usrBdd	= 'dwwm_2021' 		;
$pwdBdd	= 'Afpar2021!' 			;
//----------------------------- /parametrage 
$strBdd = 'mysql:host='.$host.';dbname='.$dbname.';charset=utf8;' ;

//------------------------------ on tente une connexion au serveur sgbd
//------------------------------ si OK, instance PDO créée
//------------------------------ si KO, instance vaut null 
try { 
	// instance de pdo identifiant la database visée
	$instancePdo= new PDO( $strBdd, $usrBdd, $pwdBdd );
} catch (Exception $e) { 
	die('Erreur fatale : ' . $e->getMessage());
}

?>