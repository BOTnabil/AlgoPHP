<h1>Exercice 13</h1>

<p>Calculer l'âge exact d'une personne
 à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

$dateref = new DateTime('2018-05-21');
$datenaissance = new DateTime('1985-01-17');
$interval = $dateref->diff($datenaissance);

//On fait la difference des deux dates
echo "Age de la personne : ".$interval->format('%y ans %m mois %d jours');