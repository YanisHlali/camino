<?php
    include('connexion.php');
    // Si le paramètre correspond à une checkbox ...
    if ($_GET['checkbox'] == "checkbox1") {
        // ... et que la checkbox n'est pas cochée ...
        if ($item1_etat == "0") {
            /// ... alors on modifie sa valeur à 1
            $conn->query("UPDATE items SET etat = '1' WHERE nom = '$item1_nom'");
        } else {
            /// ... sinon on modifie sa valeur à 0
            $conn->query("UPDATE items SET etat = '0' WHERE nom = '$item1_nom'");
        }
    }
    // Même chose pour les autres checkbox
    if ($_GET['checkbox'] == "checkbox2") {
        if ($item2_etat == "0") {
            $conn->query("UPDATE items SET etat = '1' WHERE nom = '$item2_nom'");
        } else {
            $conn->query("UPDATE items SET etat = '0' WHERE nom = '$item2_nom'");
        }
    }
    if  ($_GET['checkbox'] == "checkbox3") {
        if ($item3_etat == "0") {
            $conn->query("UPDATE items SET etat = '1' WHERE nom = '$item3_nom'");
        } else {
            $conn->query("UPDATE items SET etat = '0' WHERE nom = '$item3_nom'");
        }
    }
    // Redirection sur la page d'accueil
    header('Location: http://localhost/index.php');
    exit();

?>