<?php 


//C'est le fichier d'entrée de mon application. Il appelle Main, qui est mon routeur.

use App\Autoload;
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
    $app=new Main(); //Main sera le router 
        //On démarre l'application
    //var_dump ($app);
    $app->start();
/*****MODEal */?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/views/includes/js.php') ?>
</body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php') ?>

</html>
    
