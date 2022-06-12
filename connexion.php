<?php
    // Informations d'identification
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'svjiimbw');
    
    // Connexion à la base de données MySQL 
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Vérifier la connexion
    if($conn === false){
        die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
    }

    // Récupération de la table items
    $req = "SELECT * FROM items";
    $result = $conn->query($req);
    // Initialisation des variables
    $item1_nom;
    $item2_nom;
    $item3_nom;
    $item1_etat;
    $item2_etat;
    $item3_etat;

    // Affectation des résultats de la requête
    $i = 0;
    while($row = $result->fetch_assoc()) {
        if ($i == 0) {
            $item1_nom = $row['nom'];
            $item1_etat = $row['etat'];
        } else if ($i == 1) {
            $item2_nom = $row['nom'];
            $item2_etat = $row['etat'];
        } else {
            $item3_nom = $row['nom'];
            $item3_etat = $row['etat'];
        }
        $i++;
    }
?>