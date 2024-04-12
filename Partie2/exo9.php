<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")</p>

<h2>Résultat</h2>

<?php
//Definition du tableau
$nomsRadio = array("Monsieur","Madame","Mademoiselle");

//Affichage
echo afficherRadio($nomsRadio);


//Fonction prenant les infos du array et les transforment en boutons radio
function afficherRadio($elements) {
    $result="<form action='exo9.php'>";
    foreach($elements as $civi) {
        $result .= "<input type='radio' name='radioGroup' value='$civi' >$civi<br>";
        }
    $result .= "</form>";
    return $result;
}