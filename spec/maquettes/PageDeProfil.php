<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
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
						<input type='text' name='email' aria-label="E-mail" placeholder='E-mail' class='texte' required>
						<input type='text' name='confirmation_email' aria-label="Confirmation E-mail" placeholder='Confirmer E-mail' class='texte' required>
						<div id='ligne-mdp-login' class='ligne-mdp'>
							<input type='password' name='motdepasse' aria-label="Mot de passe" placeholder='Mot de passe' class='mdp' required>
							<input type='checkbox' id='clic-visibilite-email' class='checkbox-visibilite'>
							<label class='visibilité' for='clic-visibilite-email'> <img src='public/images/visibilité.png' width=315 height=315 alt='image du bouton de visibilité du mot de passe'> </label>
						</div>
						<button type='submit' class='btn'>Modifier l'e-mail lier au compte</button>
					</form>
				</div>
				<div>
					<form action='' method='POST'>
						<p> Mot de passe: &lt**********&gt </p>
						<button type="button" class="visibilité"> <img src="public/images/visibilité.png" width=315 height="315"  alt="image du bouton de visibilité du mot de passe"> </button>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</form>
				</div>
			</section> 
			<section id="profil" class="section_paramètre">
				<h2> Paramètrage du profil </h2>
					<div>
						<form action='' method='POST'>
							<p> Photo de profil: <img class="image_ronde" src="public/images/photoProfilAnonyme.png" alt="Photo de profil" width=500 height=500 id="imageProfilParamètres"> </p>
							<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
						</form>
					</div>
					<div>
						<form action='' method='POST'>
							<p> Description: </p>
							<p> description utilisateur </p>
							<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
						</form>
					</div>
					<div>
						<form action='' method='POST'>
							<p> Pseudo: &ltUser&gt </p>
							<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
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
