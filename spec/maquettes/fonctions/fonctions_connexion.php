<?php
    mysqli_report(MYSQLI_REPORT_ERROR);
    function connecter($host=NULL, $user=NULL, $pass=NULL) {
        if (func_num_args() == 0) {
            $connexion = @mysqli_connect();
        }
        else {
            $connexion = @mysqli_connect($host, $user, $pass);
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

    function verif_motdepasse_solide ($mdp) {
        if ((mb_strlen(trim($mdp), 'UTF-8')) < 8) {
            return false;
        }
        if (! preg_match('/[\.,;:!\?\/\\\|_\-\'"\(\)\[\]\{\}<>\+=\*%^~@#\$&€£]/u', $mdp)) {
            return false;
        }
        if (! preg_match('/[0-9]/u', $mdp)) {
            return false;
        }
        if (! preg_match('/[A-Z]/u', $mdp)) {
            return false;
        }
        if (! preg_match('/[a-z]/u', $mdp)) {
            return false;
        }
    
        return true;
    }

    function inscription ($login, $mdp, $connexion, $base, $table) {
        $mdp = md5($mdp);
        $sql = "INSERT INTO $table (login, pseudo, mot_de_passe, role) VALUES ('$login', '$login', '$mdp', 'joueur')";
        $db = mysqli_select_db($connexion, $base);
    
        if ($db) {
            $result = mysqli_query($connexion, $sql);
            if ($result) {
                return 0;
            }
        }
        return 1;
    }
