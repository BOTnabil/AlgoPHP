<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
<p>

<h2>Résultat<h2>

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