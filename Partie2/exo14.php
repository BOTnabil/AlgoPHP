<h1>Exercice 14</h1>


<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie)
</p>

<h2>Résultat</h2>

<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Création des objets v1 et ve1
$v1 = new Voiture2("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "i3", 150);

// Affichage
echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";