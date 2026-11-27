<?php
    include_once("fonctions/fonctions_verif.php"
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if (! verif_role('none') {
        header("Location: PageDeProfil.php");
    }
    
    $messages_erreur = [
            '1' => 'Indentifiant non disponible',
            '2' => 'Erreur technique, réessayez plus tard.',
            '3' => 'Le mot de passe et le mot de passe de confirmation doivent être les même',
            '4' => 'Le mot de passe doit contenir au moins 1 Majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial et faire au moins 8 caractères de long',
    ];
    
    $erreur = '';
    if (isset($_GET['erreur']) && isset($messages_erreur[$_GET['erreur']])) {
        $erreur = $messages_erreur[$_GET['erreur']];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'inscription</title>

    <!--Importation de boxicons pour les icons-->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">

    <!-- Lien vers Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style_formulaire.css">
</head>
<body>
    <div class="stars"></div>
    <div class="sun"></div>
    <div class="mountains"></div>
    <div class="grid"></div>

    <header class="navbar">
        <a href="index.php" class="logo">LOGO</a>

        <nav class="nav-links">
            <a href="index.php">Catalogue</a>
            <a href="PagePopulaire.php">Populaires</a>
            <a href="PageLeaderboard.php">Leaderboard</a>

        </nav>

        <div class="nav-actions">
            <a href="PageDeConnexion.php" class="btn btn-main">Connexion</a>
        </div>

    </header>

    <div class="wrapper">
        <form action="controleur/inscription.php" method="POST">
            <h1>Inscription</h1>
            <?php if ($erreur): ?>
                <p class="message-erreur"><?= $erreur ?></p>
            <?php endif; ?>

            <div class="input-a">
                <input type="text" name="identifiant" aria-label="identifiant" placeholder="Identifiant" required>
                <i class="bxf bx-user"></i> <!-- icon utilisateur -->
            </div>

            <div class="input-a">
                <input type="password" name="motdepasse" aria-label="Mot de passe" placeholder="Mot de passe" required>
                <i class="bxf bx-lock"></i> <!-- icon cadenas -->
            </div>

            <div class="input-a">
                <input type="password" name="motdepasse_confirmation" aria-label="Confirmer le mot de passe" placeholder="Conirmer le mot de passe" required>
                <i class="bxf bx-lock"></i> <!-- icon cadenas -->
            </div>

            <button type="submit" class="btn">S'inscrire</button>

        </form>
    </div>

    <script src="script/script.js"></script>
</body>
</html>
