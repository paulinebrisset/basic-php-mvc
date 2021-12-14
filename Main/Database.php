<?php
/**** Lien vers le tuto retenu : https://nouvelle-techno.fr/articles/live-coding-php-oriente-objet-base-de-donnees ***/
namespace App\Main;
use PDO; //on met ça pour que à chaque "PDO" qui cherche la classe à la racine, et pas dans le namespace qu'on vient de définir. 
use PDOException;

class Database extends PDO{
//On suit le design patern "singloton". Une méthode statique permet d'avoir une instance unique. 

    // On veut une instance unique pour cette classe, on la crée déjà 
    private static $instance;

    // Informations de connexion
    private const DBHOST = 'localhost';
    private const DBUSER = 'dwwm_2021';
    private const DBPASS = 'Afpar2021!';
    private const DBNAME = 'miniprojetphp';
    private const DBCHARSET = 'utf8';
    
    private function __construct(){
        // je crée la chaîne de connexion
        $_dsn = 'mysql:dbname='. self::DBNAME . ';host=' . self::DBHOST . ';charset='. self::DBCHARSET;
        // On appelle le constructeur de la classe PDO
        try{
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            //$this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8_general_ci');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//a chaque fois qu'on va faire un fetch ou un fetchAll, on aura par défaut un tableau associatif
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //récupérer les erreurs
        
        } catch(PDOException $e){
            //afficher un message d'exception si jamais la connexion ne fonctionne pas
            die($e->getMessage());
        }
    }

//créer l'instance unique de notre class. Vérifie si il y a déjà une échance, la crée le cas échéant
    public static function getInstance():self {
        if(self::$instance === null){
            self::$instance = new self();//on fait un new de la classe elle-même
        }
        return self::$instance;
    }
    //Pour avoir une instance, il suffira de faire un Database::getinstance()
}

?>