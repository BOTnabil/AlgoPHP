<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<h2>Résultat</h2>

<?php

$formateurs = [
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

//Variante
ksort($formateurs);

//Affichage
foreach ($formateurs as $prenom => $langue) {
    if($langue == "FRA") {
        echo"Salut $prenom<br>";
    } else if($langue == "ESP") {
        echo "Hola $prenom<br>";
    } else if($langue == "ENG") {
        echo "Hello $prenom<br>";
    }
}
