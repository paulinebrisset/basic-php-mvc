<?php use App\Controllers\ConnectionController;
$reglageNavbar=new ConnectionController;?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" id="titreNavBar" href="main">Mon super site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="main">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="items">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <?php //barreDeNavigationComplete ()?>
    </ul>
  </div>
  <?php $reglageNavbar->afficherLeTitre(); ?>
  
  <?php $reglageNavbar->quelsBoutonsAfficher ()?>
  <?php include '../views/modalConnexion.php';
  include '../views/modalCreerCompte.php' ?>
</nav>