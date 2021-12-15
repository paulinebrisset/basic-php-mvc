<?php
use App\Controllers\ConnectionController;
$essaiConnexion = new ConnectionController;

if (isset($_POST['mail'])) {
  $essaiConnexion->creerUnUtilisateur($_POST['nom'], $_POST['mail'],$_POST['mdp']);
}
?>
<!-- Modal créer un compte-->
<div class="modal fade" id="modalCreerCompte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau venu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="creerUnCompte" method="post" action="">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" />
          <br />
          <label for="mail">Email</label>
          <input type="email" name="mail" id="mail">
          <br />
          <label for="age">Mot de passe</label>
          <input type="password" name="mdp" id="mdp" />
          <br />
          <input type="submit" class="btn btn-dark titre" value="Créer le compte">
      </div>
      <div class="modal-footer">
        <button type="button" data-toggle="modal" class="btn btn-secondary" data-target="#modalConnexion" href="./modalConnexion.php" data-dismiss="modal">J'ai déjà un compte</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </form>
      </div>
    </div>
  </div>
</div>