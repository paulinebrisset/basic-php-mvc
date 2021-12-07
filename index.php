<!DOCTYPE html>
<html lang="fr">
<?php include './includes/head.php' ?>

<body>
    <?php 
    require 'database/Autoload.php';
    //on a fait une fonction public static, c'est pour ça que l'on n'a pas besoin d'instancier la classe autoload pour utiliser register
    Autoload::register();
    ?>
    

    <?php include './includes/footer.php' ?>
    <?php include './includes/js.php' ?>
    <?php include './database/database.php' ?>

    <!-- Initilisation de la connexion-->
    <?php
    $instancePdo = new Database\Database('miniprojetphp');

    // $datas = $instancePdo->query('SELECT * FROM utilisateurs');
    // var_dump($datas["nom"]);
    ?>

    <?php verifierErreurMdp() ?>

    <!---Fonction OSEF pour que je m'y retrouve-->
    <?php
    if (isset($_SESSION['user'])) {
        if (isTheUserAnAdmin() == true) {
            echo ("L'utilisateur est admin");
        } else {
            echo ("L'utilisateur n'est pas admin");
        }
    } else {
        echo ("L'utilisateur n'est pas logué");
    }
    ?>
    <?php echo ($_SESSION['monInstancePdo']);
    ?>
</body>

</html>