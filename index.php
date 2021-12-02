<!DOCTYPE html>
<html lang="fr">
<?php include './includes/head.php' ?>
<body>

<?php include './includes/footer.php'?>
<?php include './includes/js.php' ?>
<?php include './database/connexion.php' ?>
<?php   
    if (isset($_SESSION['erreurMdp']) && $_SESSION['erreurMdp']==true) {?>
    <script>$('#modalConnexion').modal()</script>
    <?php
    }
    ?>
</body>
</html>