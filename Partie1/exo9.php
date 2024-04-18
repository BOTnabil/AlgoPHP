<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php

$sexe = "M";
$age = 19;


//Affichage en fonction des paramètres
echo "Age : $age<br>";
echo "Sexe : $sexe<br>";


if($sexe == "M" AND $age > 20 OR $sexe == "F" AND $age > 35 AND $age <= 18) {
    echo "La personne est imposable";
} else {
    echo "La personne est non imposable";
}