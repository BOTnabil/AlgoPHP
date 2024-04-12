<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran</p>

<h2>Résultat</h2>

<?php
//Definition de la variable URL
$url = "https://my.mobirise.com/data/userpic/764.jpg";

//Affichage
echo repeterImage($url,4);

//Fonction affichant l'image plusieurs fois
function repeterImage($url, int $nbRepetitions) {
    $resultat = "";
    foreach(range(1, $nbRepetitions) as $valeur) {
        $resultat .= "<img src=$url alt= image de chien>";
    }
    return $resultat;
}