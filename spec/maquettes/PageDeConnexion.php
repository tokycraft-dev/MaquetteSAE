<?php
    include_once("fonctions/fonctions_verif.php")
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if (! verif_role('none')) {
        header("Location: PageDeProfil.php");
        exit;
    }
    
    $messages_erreur = [
            '1' => 'Mot de passe incorrect.',
            '2' => 'Identifiant inconnu.',
            '3' => 'Erreur technique, réessayez plus tard.',
    ];
    
    $erreur = '';
    if (isset($_GET['erreur']) && isset($messages_erreur[$_GET['erreur']])) {
        $erreur = $messages_erreur[$_GET['erreur']];
    }
    
    $succes = '';
    if (isset($_GET['inscription']) && $_GET['inscription'] == '1') {
        $succes = 'Inscription réussie, vous pouvez vous connecter.';
    }
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>

    <!--Importation de boxicons pour les icons-->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">

    <!-- Lien vers Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style_formulaire.css">
<!--    --><?php
//        if (session_status() == PHP_SESSION_NONE) {
//            session_start();
//        }
//    ?>
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

    </header>

    <div class="wrapper">
        <form action="controleur/connexion.php" method="POST">
            <h1>Connexion</h1>
            <?php if ($erreur): ?>
                <p class="message-erreur"><?= $erreur ?></p>
            <?php endif; ?>

            <?php if ($succes): ?>
                <p class="message-succes"><?= $succes ?></p>
            <?php endif; ?>
            <div class="input-a">
                <input type="text" name="identifiant" aria-label="Identifiant" placeholder="Identifiant" required>
                <i class="bxf bx-user"></i> <!-- icon utilisateur -->
            </div>

            <div class="input-a">
                <input type="password" name="motdepasse" aria-label="Mot de passe" placeholder="Mot de passe" required>
                <i class="bxf bx-lock"></i> <!-- icon cadenas -->
            </div>

            <button type="submit" class="btn">Se connecter</button>

            <div class="creation_compte">
                <p>Pas de compte ? <a href="PageInscription.php">Inscription</a></p>

            </div>
        </form>
    </div>

    <script src="script/script.js"></script>
</body>
</html>
