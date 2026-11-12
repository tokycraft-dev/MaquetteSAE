<?php
    include("../fonctions/fonctions_connexion.php");

    if(isset($_POST["identifiant"], $_POST["motdepasse"])){
        $login = $_POST["identifiant"];
        $mdp = $_POST["motdepasse"];
        $connexion = connecter("localhost","sae_user","sae_user");
        $base = "sae_db";
        $table = "utilisateur";
        if (in($login, $connexion, $base, $table)){
            if (correct($mdp, $login, $connexion, $base, $table)){
                session_start();
                $_SESSION["login"] = $login;
                $_SESSION["mdp"] = $mdp;
                header("Location: ../PageDeProfil.php");
            }
            else {
                header("Location: ../PageDeConnexion.php?erreur=1");
            }
        }
        else {
            header("Location: ../PageDeConnexion.php?erreur=2");
        }
    }
