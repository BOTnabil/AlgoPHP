<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
</p>

<h2>Résultat</h2>

<?php
//Definition du tableau
$elements = array("Monsieur","Madame","Mademoiselle");

//Affichage
echo alimenterListeDeroulante($elements);

//Fonction prenant les infos du array et les transforment en liste déroulante
function alimenterListeDeroulante($elements) {
    $result="<select name='civi'>";
foreach($elements as $civi) {
    $result .= "<option value='$civi'>$civi</option>";
}
    $result .= "</select>";
    return $result;
}

//https://www.w3schools.com/tags/tag_select.asp
