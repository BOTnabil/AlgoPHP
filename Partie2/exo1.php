<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
</p>

<h2>Résultat</h2>


<!-- CSS -->
<style>
    .red {
        color: red;
    }
</style>

<?php


$str = "Mon texte en paramètre";

//Fonction
function convertirMajRouge($texte) {
    $resultat = mb_strtoupper($texte);
    $resultat = "<p class='red'>$resultat</p>";
    return $resultat;
}

//Affichage
echo convertirMajRouge($str);