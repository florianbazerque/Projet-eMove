

<div class="modal fade" id="connexion" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Connectez-vous avec votre email</h3>
        <form role="form" action="" method="post" id="login-connexion" autocomplete="off">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Email" name="Email" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="Password" aria-describedby="basic-addon1">
          </div>
          <input type="submit" id="btn-connexion" class="btn btn-success btn-lg btn-block" value="Connexion">
        </form>
        <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">J'ai oublié mon mot de passe ?</a>
      </div>
      <div class="modal-footer">
        <div class="container">
            <div class="row">
                <p>Copyrights © - <?php echo date('Y'); ?> - Presented by <strong><a href="#" target="_blank">Noche Design</a></strong></p>
            </div>
        </div>
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="insription" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Inscrivez-vous !</h3>
        <form role="form" action="" method="post" id="login-inscription" autocomplete="off">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Prenom" name="Prenom" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Nom" name="Nom" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group date naissance">
              <input type="text" class="form-control" placeholder="Naissance">
              <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Adresse" name="Adresse" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Numero" name="Numero" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="Password" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Confirmer le mot de passe" name="Confirmer le mot de passe" aria-describedby="basic-addon1">
          </div>
          <input type="submit" id="btn-inscription" class="btn btn-success btn-lg btn-block" value="Inscription">
        </form>
      </div>
      <div class="modal-footer">
        <div class="container">
            <div class="row">
                <p>Copyrights © - <?php echo date('Y'); ?> - Presented by <strong><a href="#" target="_blank">Noche Design</a></strong></p>
            </div>
        </div>
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>
</div>
