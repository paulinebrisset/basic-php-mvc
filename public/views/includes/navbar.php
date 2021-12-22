<?php

use App\Controllers\ConnectionController;

$reglageNavbar = new ConnectionController;
$connexion = new ConnectionController;

if (isset($_POST['email'])) {
  $connexion->verifierUtilisateur($_POST['email'], $_POST['emdp']);
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" id="titreNavBar" href="/">Kafé Parfé</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/items">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/utilisateurs">Espace membre</a>
      </li>
      <?php $connexion->barreDeNavigationComplete() ?>
    </ul>
  </div>
  <?php $connexion->afficherLeTitre(); ?>

  <?php $connexion->quelsBoutonsAfficher() ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/views/modalConnexion.php';
  include $_SERVER['DOCUMENT_ROOT'].'/views/modalCreerCompte.php' ?>
</nav>