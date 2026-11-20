<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page de Profil</title>
	<link rel="stylesheet" href="style/style_profil.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap">
    <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    ?>
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
									if ($_POST['photo'] == true) {
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
				<form action='controleur/modif_compte.php' method='POST'>
					<div>
						<?php
                			echo "<p> Nom d'utilisateur: ".$_SESSION['login']."</p>";
							echo "<button type='submit' class='modification' name='modif_login'> <img src='public/images/modification.png' width=420 height=420 alt='image du bouton de modification'> </button>";
							if (isset($_POST["modif_login"])) {
								echo "<input type='text' name='identifiant' placeholder='Identifiant' required>";
								echo "<input type='text' name='confirmation' placeholder='Confirmer Identifiant' required>";
								echo "<button type='submit' class='btn'>Modifier l'identifiant</button>";
							}
						?>
					</div>
					<div>
						<p> E-mail: &ltUtilisateur@gmail.com&gt </p>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
					<div>
						<p> Mot de passe: &lt**********&gt </p>
						<button type="button" class="visibilité"> <img src="public/images/visibilité.png" width=315 height="315"  alt="image du bouton de visibilité du mot de passe"> </button>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
				</form>
			</section> 
			<section id="profil" class="section_paramètre">
				<h2> Paramètrage du profil </h2>
				<form>
					<div>
						<p> Photo de profil: <img class="image_ronde" src="public/images/photoProfilAnonyme.png" alt="Photo de profil" width=500 height=500 id="imageProfilParamètres"> </p>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
					<div>
						<p> Description: </p>
						<div>
							<p> description utilisateur </p>
						</div>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
					<div>
						<p> Pseudo: &ltUser&gt </p>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
				</form>
			</section> 
			<section id="preferences" class="section_paramètre">
				<h2> Paramètrage des préférences </h2>
				<form>
					<div>
						<p> Thème: <img src="public/images/thèmePlaceHolder.png" alt="thème de couleur du site"> </p>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
					<div>
						<p> Visibilité dans le leaderboard: oui </p>
						<button type="button" class="modification"> <img src="public/images/modification.png" width=420 height=420 alt="image du bouton de modification"> </button>
					</div>
				</form>
			</section> 
			<section id="déconnexion" class="section_paramètre">
				<h2> Déconnexion </h2>
				<form>
					<div>
					<a href="controleur/logout.php" class="deconnexion" onclick=
					"return confirm ('Etes-vous sûr de vouloir vous déconnecter ?');"><button type="button" id="bouton_déconnexion"> Se déconnecter </button></a>
					</div>					
					<div>
						<button type="button" id="bouton_supression"> Supprimer le compte </button>
					</div>
				</form>
			</section> 
		</div>
	</div>

</body>
</html>
