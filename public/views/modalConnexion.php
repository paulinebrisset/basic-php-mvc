<!-- Modal Connexion -->
<?php

use App\Controllers\ConnectionController;

$essaiConnexion = new ConnectionController;

if (isset($_POST['email'])) {
  $essaiConnexion->verifierUtilisateur($_POST['email'], $_POST['emdp']);
}
?>

<div class="modal fade" id="modalConnexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
        <form method="post" action="">
          <input type="submit" class="close" data-dismiss="modal" aria-label="Close" value="&times;" id="annuleConnexion" aria-hidden="true" name="deconnection">
        </form>
        </button>
      </div>
      <div class="modal-body">
        <form id="connexion" method="post" action="">
          <div class=row>
            <div class=col-12>
              <label for="email">Email</label>
              <input type="email" name="email" id="email">
              <br />
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <label for="emdp">Mot de passe</label>
              <input type="password" name="emdp" id="emdp">
              <br />
            </div>
          </div>
          <div class="row">
            <div class="col-12 titre">
              <button type="submit" class="btn btn-dark">Connexion</button>
              <br />
            </div>
            <a href="">Mot de passe oublié?</a>
          </div>
          <div>
            <p><?php $essaiConnexion->pbDeMotDePasse() ?></p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-dark" action="./modalCreerUnCompte.php">Créer un compte</button> -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalCreerCompte" data-dismiss="modal">Créer un compte</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>