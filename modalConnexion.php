<!--Button trigger modal-->
<button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#modalConnexion" href="./includes/modalConnexion.php">
  Connexion
</button>

<!-- Modal -->
<div class="modal fade" id="modalConnexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="connexion" method="post" action="">
          <div class=row>
            <div class=col-12>
              <label for="nom">Identifiant</label>
              <input type="text" name="nom" id="nom">
              <br />
            </div>
          </div>
          <div class=row>
            <div class=col-12>

              <label for="mdp">Mot de passe</label>
              <input type="password" name="mdp" id="mdp">
              <br />
            </div>
          </div>
          <div class=row>
            <div class=col-12>
            <button type="button" class="btn btn-dark">Connexion</button>
            <br />
            <a href="">Mot de passe oublié?</a>
          </div>
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