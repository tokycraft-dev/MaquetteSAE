<?php
    include_once("fonctions/fonctions_verif.php"
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if (! verif_role('any') {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_jeu.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap" rel="stylesheet">
    <title>Page de jeu</title>
    
</head>
<body>
    <div class="stars"></div>
    <div class="sun"></div>
    <div class="mountains"></div>
    <div class="grid"></div>
    <header class="navbar">
        <a href="index.php" class="logo">LOGO</a>

        <nav class="nav-links">
            <a href="index.php" class="active">Catalogue</a>
            <a href="PagePopulaire.php">Populaires</a>
            <a href="PageLeaderboard.php">Leaderboard</a>
            
        </nav>

        <div class="nav-actions">
            <?php
                if (isset($_SESSION["login"])) {
                    echo "<a href='PageDeProfil.php' class='btn btn-ghost'>Profil</a>";
                }
                else {
                    echo "<a href='PageDeConnexion.php' class='btn btn-ghost'>Profil</a>";
                }
            ?>
            <?php
                if (isset($_SESSION["login"])) {
                    echo "<a href='PageDeProfil.php' class='btn btn-main'>Connexion</a>";
                }
                else {
                    echo "<a href='PageDeConnexion.php' class='btn btn-main'>Connexion</a>";
                }
            ?>
        </div>

    </header>
         <script src="script/script.js"></script>
         <div class="ecran_jeu">
            <p>Jeu</p>
         </div>
         <div class="titre_jeu">
            <p>Nom du jeu</p>
         </div>
    </body>
</html>
