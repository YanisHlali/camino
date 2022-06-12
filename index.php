<?php
    include('connexion.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!------------------ HEADER ------------------>
    <header>
        <p>Panneau de contrôle</p>
    </header>
    <!---------------- / HEADER ------------------>

    <!------------------ MENU ------------------>
    <nav>
        <img src="images/logo.ico" />

        <ul>
            <li><a href="item.php">Ecran de visualisation</a></li>
        </ul>
    </nav>
    <!---------------- / MENU ------------------>

    <div class="main">
        <!------------------ ITEM 1 ------------------>
        <div class="item">
            <div class="haut">
                <h1>Item 1</h1>
                <p>Boîte de gestion</p>
                <br />
                <p class="titre">Titre de l'élément 1</p>
                <p class="element">Elément 1 |</p>
            </div>
            <div class="bas">
                <p id="element">Afficher l'élément 1</p>
                <label class="switch">
                    <!-- Si le bouton vaut 1, l'élément 1 est affiché. -->
                    <?php
                    if ($item1_etat == 1) {
                        echo '<input id="checkbox1" type="checkbox" checked>';
                    } else {
                        echo '<input id="checkbox1" type="checkbox">';
                    }
                    ?>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <!----------------- / ITEM 1 ------------------>
        <!------------------ ITEM 2 ------------------>
        <div class="item">
            <div class="haut">
                <h1>Item 2</h1>
                <p>Boîte de gestion</p>
                <br />
                <p class="titre">Titre de l'élément 2</p>
                <p class="element">Elément 2 |</p>
            </div>
            <div class="bas">
                <p id="element">Afficher l'élément 2</p>
                <label class="switch">
                    <!-- Si le bouton vaut 1, l'élément 2 est affiché. -->
                    <?php
                    if ($item2_etat == 1) {
                        echo '<input id="checkbox2" type="checkbox" checked>';
                    } else {
                        echo '<input id="checkbox2" type="checkbox">';
                    }
                    ?>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <!----------------- / ITEM 2 ------------------>
    </div>
    <div class="main">
        <!------------------ ITEM 3 ------------------>
        <div class="item">
            <div class="haut">
                <h1>Item 3</h1>
                <p>Boîte de gestion</p>
                <br />
                <p class="titre">Titre de l'élément 3</p>
                <p class="element">Elément 3 |</p>
            </div>
            <div class="bas">
                <p id="element">Afficher l'élément 3</p>
                <label class="switch">
                    <!-- Si le bouton vaut 1, l'élément 3 est affiché. -->
                    <?php
                    if ($item3_etat == 1) {
                        echo '<input id="checkbox3" type="checkbox" checked>';
                    } else {
                        echo '<input id="checkbox3" type="checkbox">';
                    }
                    ?>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <!----------------- / ITEM 3 ------------------>
    </div>
    <script type="text/javascript">
        // On récupère les checkbox
        let checkbox1 = document.getElementById('checkbox1');
        let checkbox2 = document.getElementById('checkbox2');
        let checkbox3 = document.getElementById('checkbox3');
        // Si la valeur de la checkbox change ...
        checkbox1.addEventListener('change', function() {
            /// ... la page renvoie sur changer.php avec l'id de la checkbox
            document.location.href=`http://localhost/changer.php?checkbox=${checkbox1.id}`;
        });
        // Même chose pour les autres checkbox
        checkbox2.addEventListener('change', function() {
            document.location.href=`http://localhost/changer.php?checkbox=${checkbox2.id}`;
        });

        checkbox3.addEventListener('change', function() {
            document.location.href=`http://localhost/changer.php?checkbox=${checkbox3.id}`;
        });

    </script>
</body>
</html>