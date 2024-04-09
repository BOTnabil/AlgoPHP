<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<h2>Résultat</h2>

<?php

//Tableau
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

//Affichage en PHP et HTML
echo"Il y a ".$nbMarques= count( $marques ) ." marques de voitures dans le tableau :"; ?>

<ul>
    <li> <?php echo $marques[0] ?>
    <li> <?php echo $marques[1] ?>
    <li> <?php echo $marques[2] ?>
    <li> <?php echo $marques[3] ?>
</ul>