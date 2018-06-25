<?php
	include 'config/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eMove - Location de voiture et scooter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" >
	<link rel="stylesheet" href="css/owl.carousel.min.css"> 
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/jquery-3.3.1.min.js"></script>

</head>
<body>
	<header>
		<nav  class="container">
			<a href="/"><img src="img/logo.png" /></a>
			<ul>
				<li><button type="button"  data-toggle="modal" data-target="#insription">Inscription</button></li>
				<li> | </li>
				<li><button type="button"  data-toggle="modal" data-target="#connexion">Connexion</button></li>
				<li><a href="#"><img src="img/user.png" alt="" /></a></li>
			</ul>
		</nav>
	</header>
	<div class="container reservation">
		<div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Resume</span>
            <span class="badge badge-primary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Vehicule</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">12,00€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">8,00€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">5,00€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (€)</span>
              <strong>15,00€</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Promo</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adresse de facturation</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              	<div class="col-md-6 mb-3">
                	<input type="text" class="form-control" name="firstName" placeholder="Prénom" value="" required="">
                	<div class="invalid-feedback">
                  		Un prénom valide est requis.
                	</div>
              	</div>
              	<div class="col-md-6 mb-3">
                	<input type="text" class="form-control" name="lastName" placeholder="Nom" value="" required="">
                	<div class="invalid-feedback">
                  		Un nom valide est requis.
                	</div>
              	</div>
            </div>
            <div class="mb-3">
              	<label for="email">Email <span class="text-muted">(Optional)</span></label>
              	<input type="email" class="form-control" name="email" placeholder="you@example.com">
              	<div class="invalid-feedback">
            		S'il vous plaît entrer une adresse email valide pour les mises à jour d'expédition.
              	</div>
            </div>

            <div class="row">
              	<div class="col-md-6 mb-3">
                	<label for="ville">Ville</label>
                	<select class="custom-select d-block w-100" id="ville" required="">
                  		<option value="">Choose...</option>
                  		<option>Paris</option>
                	</select>
                <div class="invalid-feedback">
					       Veuillez sélectionner une ville valide
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="arrd">Arrondissement</label>
                <select class="custom-select d-block w-100" id="arrd" required="">
                  <option value="">Choose...</option>
                  <option>75012</option>
                </select>
                <div class="invalid-feedback">
					       Veuillez sélectionner un arrondissement valide
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Sauvegarder cette information pour la prochaine fois</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Paiment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Carte de crédit</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Espèce</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nom sur la carte</label>
                <input type="text" class="form-control" name="cc-name" placeholder="" required="">
                <small class="text-muted">Nom complet tel qu'affiché sur la carte</small>
                <div class="invalid-feedback">
                  Nom de la carte requis
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numéro</label>
                <input type="text" class="form-control" name="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Numéro de carte requis
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" name="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Date d'éxpiration
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" name="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Code de Sécurité requis
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <a href="facture" class="btn btn-success btn-lg btn-block" type="submit">Continuer</a>
          </form>
        </div>
      </div>
	</div>
		
	<!-- Footer -->
		<footer class="small-footer font-small cyan darken-3 mt-4">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 py-5">
		        <div class="mb-5 flex-center">
		          	<a href="" class="fb-ic">
		            	<i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          	</a>
		          	<a href="" class="tw-ic">
		            	<i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          	</a>
		         	<a href="" class="gplus-ic">
		            	<i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          	</a>
		          	<a href="" class="li-ic">
		          	  	<i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          	</a>
		          	<a href="" class="ins-ic">
		            	<i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          	</a>
		          	<a href="" class="pin-ic">
		            	<i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
		          	</a>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="footer-copyright text-center py-3">© 2018 Copyright 
		    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> eMove.com</a>
		  </div>
		</footer>	
	<!-- Footer -->
	<!-- Modal -->
  	<?php require 'blocs/modal.php' ?>
  	<!-- Modal-->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/api.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap-datepicker.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>