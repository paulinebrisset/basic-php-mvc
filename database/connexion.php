<?php

namespace Database;
//on va garder la connexion à la database dans une variable accessible de partout poru que ce soit plus simple d'utilisation
class Connexion {

    const DB_NAME='miniprojetphp';
    const DB_USER='dwwm_2021';
    const DB_PASS='Afpar2021!';
    const DB_HOST='localhost';

    private static $database;

    public static function getDatabase () {
    //on ne va pas initialiser la connexion à chaque fois que l'on utilise la fonction, mais seulement si la variable n'est pas encore initialisée
        if(self::$database === null) {
            self::$database = new Database(self::DB_NAME,self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
        }
        return self::$database;
    }
}
?>