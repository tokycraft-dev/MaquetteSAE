<?php
    mysqli_report(MYSQLI_REPORT_ERROR);
    function connecter($host=NULL, $user=NULL, $pass=NULL) {
        if (func_num_args() == 0) {
            $connexion = @mysqli_connect();
        }
        else {
            $connexion = @mysqli_connect($host, $user, $pass);
        }
        if ($connexion) {
            echo "<p>Connexion réussie</p>";
            echo "<p>Information sur le serveur : <b>".mysqli_get_host_info($connexion)."</b></p>";
            echo "<p>Version serveur : <b>".mysqli_get_server_info($connexion)."</b></p>";
            echo "<p>Jeu de caractères : <b>".mysqli_character_set_name($connexion)."</b></p>";
        }
        else {
            echo "<p>Erreur: ouverture de la connexion echoué</p>";
            echo "<p>Numéro de l'erreur:".mysqli_connect_errno()." </p>";
            echo "<p>Message de l'erreur:".mysqli_connect_error()." </p>";
        }
        return $connexion;
    }

    function deconnecter($connexion) {
        if ($connexion) {
            $ok = mysqli_close($connexion);
            if ($ok) {
                echo "<p>Déconnexion réussie</p>";
            }
            else {
                echo "<p>Erreur: fermeture de la connexion echoué</p>";
            }
        }
        else {
            echo "<p>La connexion n'est pas ouverte</p>";
        }
    }
    function in ($x, $connexion, $base, $table) {
        $sql = "SELECT * FROM $table WHERE login = '$x'";
        $db = mysqli_select_db($connexion, $base);

        if ($db) {
            $result = mysqli_query($connexion, $sql);
            if ($result) {
                return mysqli_num_rows($result) == 1;
            }
        }
        return false;
    }

    function correct ($mdp, $login, $connexion, $base, $table) {
        $sql = "SELECT * FROM $table WHERE login = '$login'";
        $db = mysqli_select_db($connexion, $base);

        if ($db) {
            $result = mysqli_query($connexion, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    return $row['mot_de_passe'] == md5($mdp);
                }
            }
        }
        return false;
    }
