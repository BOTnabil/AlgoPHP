<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

//Moyenne des notes du tableau
$notes = [10,12,8,19,3,16,11,13,9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

//Affichage
echo "Les notes obtenues par l'élève sont : ".implode(" ", $notes)."<br>";
echo"Sa moyenne générale est donc de $moyenne";