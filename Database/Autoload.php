<?php
class Autoload {
    //on met en statique parce qu'on n'a pas besoin d'instancier notre class
    static function register (){     
        spl_autoload_register(array(__CLASS__, 'autoload'));//__class__ récupère le nom de la classe courante 
    }

    static function autoload($class_name){
        require 'class/'.$class_name.'.php';
    }
}
?>