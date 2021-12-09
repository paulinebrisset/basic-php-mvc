<?php
    /*
        Cette classe représente le routeur principal
        Elle va aller chercher et lire les URL et renvoyer vers le Controlleur concerné
    */
namespace App\Main;
use App\Controllers;

class Main {
    /*********************C'est mon router, un "router simple qui ne gère pas l'erreur*********************/
    /*
    Exemple du fonctionnement prévu pour les url
    
    Adresse perçue dans le navigateur
        http://mes-articles.test/articles/details/parametre 
        avec annonce : le controller
        avec detail méthode dans le controller, 
        et parametre : paramètre éventuel passé au controller
    Adresse réelle 
        http://mes-articles.test/index.php?p=articles/details/parametre
*/
    
    public function start(){

/*******NETTOYAGE D'URL ET ON EVITE LE DUPLICATE CONTENT ***********/

        //On va retirer le "trailing slash" éventuel de l'Url
        // On récupère l'adresse url
        $uri = $_SERVER['REQUEST_URI'];
        /*
            On vérifie si elle n'est pas vide et si elle se termine par un slash (uri[-1]===/)
            -> Si c'est le cas, on enlève le / parce qu'il ne sert à rien :
            on aura la même page avec ou sans le slash, ça fait ce que l'on appelle du duplicate content
        */

        if(!empty($uri) && $uri !='/pauline/projetscolaire/public/' && $uri[-1] === '/'){ //il y a quand même un slash systématique à la fin paraît-il, au moins sur la page d'accueil
            // Dans ce cas on enlève le /
            $uri = substr($uri, 0, -1);

            // On envoie un code de redirection permanente pour ne pas avoir la page en double
            http_response_code(301);

            // On redirige vers l'URL sans /
            header('Location: '.$uri);
            exit;
        }   

/*******GESTION DES PARAMETRES**********/

        /* 
        On sépare les paramètres dans un tableau 
        (-> p=controller/methode/parametres) + on les met dans le tableau $params
        
        c'est aussi pour ne pas avoir une positition de $params qui stocke un slash 
        qu'on l'a enlevé dans le if d'avant
        */
        // $params=[];
        // if (isset($_GET['p'])){
            $params = explode('/', $_GET['p']);
        // }

        // On vérifie si on a au moins un paramètre (donc si il y en a un dans $params[0])
        if($params[0] != ""){
        /*
        PARAM 1    
            Le 1er param va correspondre au nom du controller, mais il va falloir refabriquer l'adresse du ficihier (avec le namespace)
            On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
            + en ajoutant le namespace des controleurs, + ajoutant "Controller" à la fin
            Ex : pour monsite/bidule en url ; on veut qu'il aille chercher App\Controller\BiduleController
        */
            $controller = '\\App\\Controllers\\'.ucfirst(array_shift($params)).'Controller'; //array_shift enlève la première valeur d'un tableau
            // On instancie le contrôleur
            $controller = new $controller();

        /* 
        PARAM 2
            On sauvegarde le 2ème paramètre dans $action 
            si on a un param, c'est une méthode qu'on utilise -> soit elle existe, soit 404
            si pas de param, on utilise la méthode index
        */
            $action = isset($params[0]) ? array_shift($params) : 'index';   

            if(method_exists($controller, $action)){
            /* 
                Si il reste des paramètres : 
                on appelle la méthode en envoyant les paramètres 
                sinon on l'appelle "à vide"
            */
            /*    
                ancienne version :  (isset($params[0])) ? $controller->$action($params) : $controller->$action();
                cela permettait de passer des paramètres complémentaires sous forme de un tableau
                maintenant -> on veut un entier directement. call_user_func_array permet de faire la conversion
            */
                (isset($params[0])) ? call_user_func_array([$controller,$action], $params) : $controller->$action(); 

            }else{
                /*
                    si il y a un param de méthode mais que cette méthode n'existe pas, 
                    on envoie le code réponse 404
                */
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }
        } else {
            /*
            Notre router, si jamais on ne lui met pas de paramètres, doit afficher la page d'accueil
            On instancie le contrôleur par défaut (page d'accueil)
            */
            $controller = new Controllers\MainController();

            // On appelle la méthode index
            $controller->index();
        }


    }
}
?>