<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>

<?php
//Definition des tableaux
$infoInput = array("Nom","Prénom","Adresse e-mail","Ville");
$sexeRadio = array("Monsieur","Madame","Mademoiselle");
$formationsListe = array("Développeur Logiciel ","Designer web","Intégrateur","Chef de projet ");

//Affichage
echo "<form action='exo10.php'>".afficherInput($infoInput);
echo afficherRadio($sexeRadio);
echo alimenterListeDeroulante($formationsListe);
echo "<br><input type='submit'></form>";

//Fonction prenant les infos des array et les transforment en formulaire complet
//champs de texte
function afficherInput($infoInput) {
    $result="";
foreach($infoInput as $info) {
    $result .= "$info: <br><input type='text' name='$info'><br>";
}
    return $result;
}
//boutons radio
function afficherRadio($elements) {
    $result="";
    foreach($elements as $civi) {
        $result .= "<input type='radio' id='radio' name='radioGroup' value='$civi' ><label for='radio'>$civi</label><br>";
        }
    return $result;
}
//liste deroulante
function alimenterListeDeroulante($elements) {
    $result="<select name='formation'>";
foreach($elements as $formations) {
    $result .= "<option value='$formations'>$formations</option>";
}
    $result .= "</select>";
    return $result;
}
