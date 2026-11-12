<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Populaires</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style_index.css">
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
            <a href="PagePopulaire.php" class="active">Populaires</a>
            <a href="PageLeaderboard.php">Leaderboard</a>
            
        </nav>

        <div class="nav-actions">
            <a href="PageDeProfil.php" class="btn btn-ghost">Profil</a>
            <a href="PageDeConnexion.php" class="btn btn-main">Connexion</a>
        </div>
    </header>

    <h1>Populaires</h1>

    <section class="catalog">
        <article class="card">
            <div class="cover"></div>
            <div class="info">
                <h2>JEU POPULAIRE 1</h2>
                <a href="PageDeJeu1.php" class="btn btn-ghost">Jouer</a>
            </div>
        </article>

        <article class="card">
            <div class="cover"></div>
            <div class="info">
                <h2>JEU POPULAIRE 2</h2>
                <a href="PageDeJeu2.php" class="btn btn-ghost">Jouer</a>
            </div>
        </article>

    </section>

    <script src="script/script.js"></script>
</body>
</html>
