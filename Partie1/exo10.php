<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>Résultat</h2>

<?php

$prixTTC = 152;
$montantVerse = 200;
$resteApayer = $montantVerse-$prixTTC;

$billet10 = intdiv ($resteApayer, 10);
$billet5 = intdiv (($resteApayer - 10 * $billet10), 5);
$piece2 = intdiv (($resteApayer - 10 * $billet10 - 5 * $billet5), 2);
$piece1 = intdiv (($resteApayer - 10 * $billet10 - 5 * $billet5 - 2 * $piece2), 1);
 
echo "Rendue de monnaie :<br>
$billet10 billets de 10 € - $billet5 billets de 5 €  $piece2 pièces de 2 € - $piece1 pièces de 1 €";