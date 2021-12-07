<!DOCTYPE html>
<html lang="fr"> 
<?php //include './includes/head.php'  -->

//C'est le fichier d'entrée de mon application. Il appelle Main, qui est mon routeur.

 
        /*************PARTIE NOUVELLE TECHNO ******************/
    define('ROOT', dirname(__DIR__)); //on remonte d'un dossier grâce à une fonction pour que tout se passe bien. On redéfinit fictivement le ROOT
    
    use App\Autoload;
    use App\Main\Main;
    use App\Models\Model;
use App\Models\Table\ModelItems;
use App\Models\Table\ModelUtilisateurs;

/****Autoloader *****/
    
        // On charge le fichier Autoload
    require_once ROOT.'\Autoload.php';
        //on a fait une fonction static, c'est pour ça que l'on n'a pas besoin d'instancier la classe autoload pour utiliser register
    
    Autoload::register();

        //On instancie Main
    $app=new Main(); //Main sera le router 
        //On démarre l'application
        var_dump ($app);
    $app->start();
    $mesItemps=new ModelItems();
    var_dump($mesItemps);
    echo"<br/>";
    var_dump ($mesItemps->findAll());
    $mesUsers= new ModelUtilisateurs();
  
    var_dump ($mesUsers);
    echo ($mesUsers->findAll());
    ?>
    
