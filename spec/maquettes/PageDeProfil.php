<?php
    include_once("fonctions/fonctions_verif.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if (! verif_role('any')) {
        header("Location: index.php");
		exit;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Page de Profil</title>
	<link rel="stylesheet" href="style/style_profil.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap">
	<script src="script/script.js" defer></script>
	<script src="script/script_profil.js" defer></script>
</head>
<body>
    <div class="stars"></div>
    <div class="sun"></div>
    <div class="mountains"></div>
    <div class="grid"></div>
	<header id="entete">
        	<nav id="nav_horizontale">
            	<ul>
                	<li>
						<label for="clic-profil">
                            <span id="span_image">
                                <img src="public/images/modification_hover.png" alt="modification" width=500 height=500 id="imageProfilHover">
							    <?php
									if ($_SESSION['photo'] == true) {
										echo "<img class='image_ronde' src='public/images/photoProfil_".$_SESSION['id'].".png' alt='Photo de profil' width=500 height=500 id='imageProfil'>";
									}
									else {
										echo "<img class='image_ronde' src='public/images/photoProfilAnonyme.png' alt='Photo de profil' width=500 height=500 id='imageProfil'>";
									}
								?>
                            </span>
                        </label>
					</li>
					<?php
                		echo "<li><h1>Bonjour ".$_SESSION['login']."</h1></li>";
					?>
            	</ul>
            	<ul id="menu">
                	<li >
						<a href="index.php">
  							<img class="image_ronde" src="public/images/LogoPlaceHolder.png" alt="Logo vers le menu" width=216 height=222 id="imageLogo">
						</a>
					</li>
            	</ul>
        </nav>
    </header>

	<div id = "paramètres">
		<input type="radio" id="clic-compte" name="clic-parametres" checked>
  		<input type="radio" id="clic-profil" name="clic-parametres">
 		<input type="radio" id="clic-preferences" name="clic-parametres">
  		<input type="radio" id="clic-déconnexion" name="clic-parametres">
		<nav id="nav_verticale">
			<ul>
				<li class="lien_navigation"><label for="clic-compte">Compte</label></li>
      			<li class="lien_navigation"><label for="clic-profil">Profil</label></li>
      			<li class="lien_navigation"><label for="clic-preferences">Préférences</label></li>
      			<li class="lien_navigation" id="dernier"><label for="clic-déconnexion">Déconnexion</label></li>
			</ul>
		</nav>

		<div id="contenu_paramètre">
			<section id="compte" class="section_paramètre">
				<h2> Paramètrage du compte </h2>
				<div>
					<div id='ligne-login' class='ligne'>
						<?php
		                	echo "<p> Nom d'utilisateur: ".$_SESSION['login']."</p>";
						?>
						<input type='checkbox' id='clic-modif-login' class='checkbox-modif'>
						<label class='modification' for='clic-modif-login'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
					</div>
					<form action='controleur/modif_compte.php' method='POST' id='formulaire-login' class='formulaire-modification'>
						<h3> Formulaire de modification de Login </h3>
						<input type='text' name='identifiant' aria-label="Identifiant" placeholder='Identifiant' class='texte' required>
						<input type='text' name='confirmation_identifiant' aria-label="Confirmation Identifiant" placeholder='Confirmer Identifiant' class='texte' required>
						<div id='ligne-mdp-login' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe" placeholder='Mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-login' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-login'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier l'identifiant</button>
					</form>
				</div>
				<div>
					<div id='ligne-email' class='ligne'>
						<?php
							if ($_SESSION['email'] === null) {
		                		echo "<p> E-mail: renseigner votre e-mail </p>";
							}
							else {
		                		echo "<p> E-mail: ".$_SESSION['email']."</p>";
							}
						?>
						<input type='checkbox' id='clic-modif-email' class='checkbox-modif'>
						<label class='modification' for='clic-modif-email'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
					</div>
					<form action='controleur/modif_compte.php' method='POST' id='formulaire-email' class='formulaire-modification'>
						<h3> Formulaire de modification de l'e-mail </h3>
						<input type='email' name='email' aria-label="E-mail" placeholder='E-mail' class='texte' required>
						<input type='email' name='confirmation_email' aria-label="Confirmation E-mail" placeholder='Confirmer E-mail' class='texte' required>
						<div id='ligne-mdp-login' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe" placeholder='Mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-email' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-email'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier l'e-mail lié au compte</button>
					</form>
				</div>
				<div>
					<div id='ligne-mdp' class='ligne'>
						<p> Mot de passe: ******** </p>
						<input type='checkbox' id='clic-modif-mdp' class='checkbox-modif'>
						<label class='modification' for='clic-modif-mdp'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
					</div>
					<form action='controleur/modif_compte.php' method='POST' id='formulaire-mdp' class='formulaire-modification'>
						<h3> Formulaire de modification du mot de passe </h3>
						<div id='ligne-mdp-mdp' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe actuel" placeholder='Mot de passe actuel' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-mdp' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-mdp'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<div id='ligne-mdp-nouveau-mdp' class='ligne-mdp'>
							<input type='password' name='nouveaumotdepasse' aria-label="Nouveau mot de passe" placeholder='Nouveau mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-nouveau-mdp' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-nouveau-mdp'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<div id='ligne-mdp-nouveau-mdp-confirmation' class='ligne-mdp'>
							<input type='password' name='nouveaumotdepasseconfirmation' aria-label="Confirmer le nouveau mot de passe" placeholder='Confirmer le nouveau mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-nouveau-mdp-confirmation' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-nouveau-mdp-confirmation'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier le mot de passe du compte</button>
					</form>
				</div>
			</section> 
			<section id="profil" class="section_paramètre">
				<h2> Paramètrage du profil </h2>
				<div>
					<div id='ligne-photo' class='ligne'>
						<?php
		                	if ($_SESSION['photo'] == true) {
								echo "<p> Photo de profil: <img class='image_ronde' src='public/images/photoProfil_".$_SESSION['id'].".png' alt='Photo de profil' width=500 height=500 id='imageProfil'> </p>";
							}
							else {
								echo "<p> Photo de profil: <img class='image_ronde' src='public/images/photoProfilAnonyme.png' alt='Photo de profil' width=500 height=500 id='imageProfil'> </p>";
							}
						?>
						<input type='checkbox' id='clic-modif-photo' class='checkbox-modif'>
						<label class='modification' for='clic-modif-photo'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
					</div>
					<form action='controleur/modif_profil.php' method='POST' id='formulaire-photo' class='formulaire-modification' enctype='multipart/form-data'>
						<h3> Formulaire de modification de la photo de profil </h3>
						<input type='file' id='photo' name='photo' accept='image/png, image/jpeg, image/webp'>
						<input type='checkbox' id='clic-bool-photo' class='checkbox-bool'>
						<label class='bool' for='clic-bool-photo'> Revenir à la photo de profil par défaut: <img src='public/images/faux.png' width=420 height=420 alt='image du bouton d\'acceptation'> </label>
						<div id='ligne-mdp-photo' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe" placeholder='Mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-photo' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-photo'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier la photo de profil</button>
					</form>
				</div>
				<div>
					<div id='ligne-pseudo' class='ligne'>
						<?php
		                	echo "<p> Pseudo: ".$_SESSION['pseudo']."</p>";
						?>
						<input type='checkbox' id='clic-modif-pseudo' class='checkbox-modif'>
						<label class='modification' for='clic-modif-pseudo'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
					</div>
					<form action='controleur/modif_profil.php' method='POST' id='formulaire-pseudo' class='formulaire-modification'>
						<h3> Formulaire de modification du pseudo </h3>
						<input type='text' name='pseudo' aria-label="Pseudo" placeholder='Pseudo' class='texte' required>
						<input type='text' name='confirmation_pseudo' aria-label="Confirmation Pseudo" placeholder='Confirmer le pseudo' class='texte' required>
						<div id='ligne-mdp-pseudo' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe" placeholder='Mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-pseudo' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-pseudo'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier le pseudo</button>
					</form>
				</div>
				<div>
					<div id='ligne-description' class='ligne'>
						<?php
							if ($_SESSION['description'] === null) {
		                		echo "<p> Description: Ajouter une description </p>>
									  <input type='checkbox' id='clic-modif-description' class='checkbox-modif'>
								      <label class='modification' for='clic-modif-description'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
									  </div>";
							}
							else {
		                		echo "<p> Description: </p>
									  <input type='checkbox' id='clic-modif-description' class='checkbox-modif'>
								      <label class='modification' for='clic-modif-description'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </label>
									  </div>";
								echo "<article id='description'>
									  	<p>".$_SESSION['description']."</p>
									  </article>";
							}
						?>
					<form action='controleur/modif_profil.php' method='POST' id='formulaire-description' class='formulaire-modification'>
						<h3> Formulaire de modification de description </h3>
						<input type='text' name='pseudo' aria-label="Pseudo" placeholder='Pseudo' class='texte' required>
						<textarea name='description' rows='8' aria-label='Entrez votre description' placeholder='Entrez votre description' class='long-texte' required></textarea>
						<div id='ligne-mdp-pseudo' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe" placeholder='Mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-description' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-description'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier la description</button>
					</form>
				</div>
			</section> 
			<section id="preferences" class="section_paramètre">
				<h2> Paramètrage des préférences </h2>
					<div>
						<form action='' method='POST'>
							<p> Thème: <img src="public/images/thèmePlaceHolder.png" alt="thème de couleur du site"> </p>
							<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
						</form>
					</div>
					<div>
						<form action='' method='POST'>
							<p> Visibilité dans le leaderboard: oui </p>
							<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
						</form>
					</div>
			</section> 
			<section id="déconnexion" class="section_paramètre">
				<h2> Déconnexion </h2>
					<div>
						<form action='' method='POST'>
							<a href="controleur/logout.php" class="deconnexion" onclick=
							"return confirm ('Etes-vous sûr de vouloir vous déconnecter ?');"><button type="button" id="bouton_déconnexion"> Se déconnecter </button></a>
							<button type="button" id="bouton_supression"> Supprimer le compte </button>
						</form>
					</div>
			</section> 
		</div>
	</div>

</body>
</html>
