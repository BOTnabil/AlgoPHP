<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
</p>

<h2>Résultat</h2>


<?php
//Definition du tableau
$nomsInput = array("Nom","Prénom","Ville");

//Affichage
echo afficherInput($nomsInput);

//Fonction prenant les infos du array et les transforment en formulaire
function afficherInput($nomsInput) {
    $result="<form action='exo5.php' method='POST'>";
foreach($nomsInput as $info) {
    $result .= "$info: <br><input type='text' name='$info'><br>";
}
    $result .= "</form>";
    return $result;
}

//https://www.w3schools.com/php/php_forms.asp