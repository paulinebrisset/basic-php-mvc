<?php

namespace App\Main;
use \PDO; //on met ça pour que à chaque "PDO" qui cherche la classe à la racine, et pas dans le namespace Database. 

class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct ($db_name, $db_user='dwwm_2021', $db_pass='Afpar2021!', $db_host='localhost') {
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;
    }

    private function getPDO() { //accesseur

        //on ne veut pas qu'il initialise l'instance pour chaque nouvelle requête, donc on met un if avant
        if($this->pdo===null){

            //pourquoi il me met variables inconnues si j'utilise les variables de class? 
            $pdo = new PDO('mysql:dbname=miniprojetphp;host=localhost', 'dwwm_2021','Afpar2021!');
            //pour l'instant on affiche à max les erreurs pour pouvoir débugguer
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }

    //lancer la requête et récupérer les résultats sous forme de tableau associatif
    public function query($statement, $class_name){      
        $requete = $this->getPDO()->query($statement);
        /* doc fetch-class https://www.php.net/manual/fr/pdostatement.fetch.php*/
        $datas = $requete->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    public function prepare($statement, $attributes, $class_name, $one =false) {
        $requete= $this->getPDO()->prepare($statement);
        $requete->execute($attributes);
        $requete->setFetchMode(PDO::FETCH_CLASS,$class_name);
            if($one){
                $datas = $requete->fetch();
            } else {
                $requete->fetchAll($class_name);
            }
    return $datas;
    }
    
}
?>