<?php
/****Lien vers le tuto retenu : https://nouvelle-techno.fr/articles/live-coding-php-oriente-objet-base-de-donnees */
namespace App\Main;
use \PDO; //on met ça pour que à chaque "PDO" qui cherche la classe à la racine, et pas dans le namespace Database. 
use PDOException;

class Database extends PDO{

    // Instance unique de la classe
    private static $instance;

    // Informations de connexion
    private const DBHOST = 'localhost';
    private const DBUSER = 'dwwm_2021';
    private const DBPASS = 'Afpar2021!';
    private const DBNAME = 'miniprojetphp';
    
    private function __construct(){
        // je recrée le paramétrage
        $_dsn = 'mysql:dbname='. self::DBNAME . ';host=' . self::DBHOST;
        // On appelle le constructeur de la classe PDO
        try{
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //récupérer les erreurs
        
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance():self {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
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