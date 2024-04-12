<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
</p>

<h2>Résultat</h2>

<?php
//Definition du tableau
$elements = [
    "Choix 1"=>"",
    "Choix 2"=>"checked",
    "Choix 3"=>""];

//Affichage
echo genererCheckbox($elements);

//Fonction prenant les infos du array et les transforment en cases à cocher
function genererCheckbox($elements) {
    $result="<form action='exo7.php'>";
foreach($elements as $choix => $check) {
    $result .= "<input type='checkbox' name='$choix' value='$choix' $check>$choix<br>";
}
    $result .= "</form>";
    return $result;
}

//https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_checkbox