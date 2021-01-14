<?php
session_start();
?>
<html lang="fr">
<!--bloc concernant la structure du site-->

<head>
    <!--Le type de symboles et langues utilisable-->
    <meta charset="UTF-8">
    <!--Prendre la largeur de l'écran, définir son scaling-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titre pour google-->
    <?php
    $metaTitle = "<title>CV Steve Botella</title>";
    $metaDescription = "Mon site internet";
    echo "$metaTitle";
    ?>
    <!--Lier la page de style css à la page index-->
    <link rel="stylesheet" href="/pages/styles.css">
</head>
<!--Intérieur de la page-->

<body>
<header>
    <nav class="NavBar">
        <!--List a puce afin de créer la NavBar-->
        <ul class="NavButton">
            <!--Lien interne vers la page principale-->
            <li><a href="../?page=cv">CV</a></li>
            <!-- Lien interne vers la page hobby-->
            <li><a href="../pages/hobby.php?page=hobby">Hobby</a></li>
            <!-- Lien interne vers la page contact-->
            <li><a href="../pages/contact.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <div id="Img_CV"></div>
</header>