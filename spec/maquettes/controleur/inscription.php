<?php
    include("../fonctions/fonctions_connexion.php");

    if(isset($_POST["identifiant"], $_POST["motdepasse"])){
        $login = $_POST["identifiant"];
        $mdp = $_POST["motdepasse"];
        $connexion = connecter("localhost","sae_user","sae_user");
        $base = "sae_db";
        $table = "utilisateur";
        if (! in($login, $connexion, $base, $table)){
            $result = inscription($login, $mdp, $connexion, $base, $table);
            if ($result == 0) {
                header("location: ../PageDeConnexion.php?inscription=1");
            }
            else {
                header("location: ../PageInscription.php?erreur=2");
            }
        }
        else {
            header("Location: ../PageInscription.php?erreur=1");
        }
    }
