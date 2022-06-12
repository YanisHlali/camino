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
    <link rel="stylesheet" href="css/item.css">
</head>
<body>
    <!-- Affichage des éléments s'ils sont cochés -->
    <?php
    if ($item1_etat == "1") {
        echo '<p class="element1">Titre élément 1</p>';
    }

    if ($item2_etat == "1") {
        echo '<p class="element3">Titre élément 3</p>';
    }

    if ($item3_etat == "1") {
        echo '<p class="element2">Titre élément 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis pretium metus, ut rhoncus ex consectetur in. Cras volutpat ut purus in accumsan. Vestibulum ac ligula vel neque scelerisque porta sit amet id mauris. Sed sem mauris, cursus vitae lectus in, maximus aliquet ipsum. Nunc ullamcorper, quam id rutrum ultricies, est diam tincidunt erat, in sagittis odio dui sed leo. Nam nec erat ullamcorper lorem fringilla gravida. Aenean auctor nibh vel pharetra lacinia. Donec placerat a massa sed aliquet. Aenean quis sagittis lorem.</p>';
    }
    ?>
</body>
</html>