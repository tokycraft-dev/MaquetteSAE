<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
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
                $sql = "SELECT * FROM $table WHERE login = '$login'";
                $db = mysqli_select_db($connexion, $base);
                if ($db) {
                    $result = mysqli_query($connexion, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['login'] = $row['login'];
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['description'] = $row['description'];
                            $_SESSION['pseudo'] = $row['pseudo'];
                            $_SESSION['theme'] = $row['theme_id'];
                            $_SESSION['visibilite'] = $row['visibilite'];
                            $_SESSION['photo'] = $row['photo'];
                            $_SESSION['score'] = $row['score'];
                            $_SESSION['animation'] = $row['animation'];
                            header("Location: ../PageDeProfil.php");
                        }
                    }
                    else {
                        header("Location: ../PageDeConnexion.php?erreur=3");
                    }
                }
                else {
                    header("Location: ../PageDeConnexion.php?erreur=3");
                }
            }
            else {
                header("Location: ../PageDeConnexion.php?erreur=1");
            }
        }
        else {
            header("Location: ../PageDeConnexion.php?erreur=2");
        }
    }
