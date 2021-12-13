<?php 


//C'est le fichier d'entrée de mon application. Il appelle Main, qui est mon routeur.

use App\Autoload;
use App\Main\Router;
use App\Main\Main;
use App\Models\Model;
use App\Models\Table\ModelItems;
use App\Models\Table\ModelUtilisateurs;

//Je définis une constante, ROOT, qui désigne le dossier racine du projet, qui est le dossier parent de public, d'om l'utilisation de dirname pour définir root
    define('ROOT', dirname(__DIR__)); //on remonte d'un dossier grâce à une fonction pour que tout se passe bien. On redéfinit fictivement le ROOT
    //

/****Autoloader*****/
    
        // On charge le fichier Autoload
    require_once ROOT.'\Autoload.php';
        //on a fait une fonction static, c'est pour ça que l'on n'a pas besoin d'instancier la classe autoload pour utiliser register
    Autoload::register();
    
/*****Main******/
        //On instancie Main qui va être chargé du lancement de l'application
    $app=new Main;
 //Main sera le router 
        //On démarre l'application
    //var_dump ($app);
    $app->start();

/*****Mes petits tests à supprimer *****/
/*
echo ("<br/><h2><b> page index.php du dossier public</b></h2><br/>");
echo ("<br/><h2><b>Retour à la page index.php du dossier public</b></h2><br/>");
   
    echo ("<br/><b> var dump de get</b><br/>");
    var_dump ($_GET);
    echo ("<br/>");
    $mesItemps=new ModelItems();

    echo ("<br/><b> var dump d'un new modelItemps</b><br/>");
    var_dump($mesItemps);
    echo"<br/>";

    // echo ("<br/><b> var dump d'un find All sur un new modelItemps</b><br/>");
    // var_dump ($mesItemps->findAll());
    
    $mesUsers= new ModelUtilisateurs();

    echo ("<br/><b> var dump d'un new modelUtilisateur</b><br/>");
    var_dump ($mesUsers);
    echo ("<br/><b> var dump d'un find All sur un new modelutilisateur/b><br/>");
    echo ($mesUsers->findAll());
*/
    ?>
    
