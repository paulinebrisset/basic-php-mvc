<!DOCTYPE html>
<html lang="fr">
<?php include './includes/head.php' ?>
<body>

<?php include './includes/footer.php'?>
<?php include './includes/js.php' ?>
<?php include './database/connexion.php' ?>
<?php verifierErreurMdp() ?>

<!---Fonction OSEF pour que je m'y retrouve-->
<?php 
    if (isset($_SESSION['user'])) {
        if (isTheUserAnAdmin()==true){
            echo("L'utilisateur est admin");
        } else {
            echo("L'utilisateur n'est pas admin");
        } 
    } else {
        echo("L'utilisateur n'est pas logué");
    }
?><?php echo(
$_SESSION['monInstancePdo']);
?>
</body>
</html>