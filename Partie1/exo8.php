<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :
</p>

<h2>Résultat</h2>

<?php

$nbre = 8;
echo "Table de $nbre :<br>";

//solution 1
$j = 1;
while($j <= 10) {
    echo $j." x ".$nbre." = ".$calcul=$j*$nbre."<br>";
    $j++;
}

//solution 2
for($i = 1; $i <= 10; $i++) {
    echo $i." x ".$nbre." = ".$calcul=$i*$nbre."<br>";
}