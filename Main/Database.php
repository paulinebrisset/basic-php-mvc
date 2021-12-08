<?php
/****Lien vers le tuto retenu : https://nouvelle-techno.fr/articles/live-coding-php-oriente-objet-base-de-donnees */
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
    
    private function __construct(){
        // je crée la chaîne de connexion
        $_dsn = 'mysql:dbname='. self::DBNAME . ';host=' . self::DBHOST;
        // On appelle le constructeur de la classe PDO
        try{
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8_general_ci');
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

/*****************VESTIGES DE GRAFIKART ********************/
    // private function getPDO() { //accesseur

    //     //on ne veut pas qu'il initialise l'instance pour chaque nouvelle requête, donc on met un if avant
    //     if($this->pdo===null){
    //         //pourquoi il me met variables inconnues si j'utilise les variables de class? 
    //         $pdo = new PDO('mysql:dbname='.$this->db_name.';host='$this->db_host.localhost', 'dwwm_2021','Afpar2021!');
    //         //pour l'instant on affiche à max les erreurs pour pouvoir débugguer
    //         $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //         $this->pdo = $pdo;
    //     }

    //     return $this->pdo;
    // }

    // //lancer la requête et récupérer les résultats sous forme de tableau associatif
    // public function query($statement, $class_name){      
    //     $requete = $this->getPDO()->query($statement);
    //     /* doc fetch-class https://www.php.net/manual/fr/pdostatement.fetch.php*/
    //     $datas = $requete->fetchAll(PDO::FETCH_CLASS, $class_name);
    //     return $datas;
    // }

    // public function prepare($statement, $attributes, $class_name, $one =false) {
    //     $requete= $this->getPDO()->prepare($statement);
    //     $requete->execute($attributes);
    //     $requete->setFetchMode(PDO::FETCH_CLASS,$class_name);
    //         if($one){
    //             $datas = $requete->fetch();
    //         } else {
    //             $requete->fetchAll($class_name);
    //         }
    // return $datas;
    // }
    
//}
?>