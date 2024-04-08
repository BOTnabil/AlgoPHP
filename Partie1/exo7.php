<h1>Exercice 7<h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n’est pas gérée, merci de le préciser.
<p>

<h2>Résultat<h2>

<?php

$age = 10;

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    switch(true) {
        case $age >= 12: echo "Cadet<br>"; break;
        case $age >= 10: echo "Minime<br>"; break;
        case $age >= 8: echo "Pupille<br>"; break;
        case $age >= 6: echo "Poussin<br>"; break;
        default: echo "Trop jeune<br>";
    }
} else {
    echo "Aucune catégorie disponible.<br>";
}