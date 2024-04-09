<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne
 à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

$dateRef = new DateTime('2018-05-21');
$dateNaissance = new DateTime('1985-01-17');
$interval = $dateRef->diff($dateNaissance);

//On fait la difference des deux dates
echo "Age de la personne : ".$interval->format('%y ans %m mois %d jours');