<h1>Exercice 13</h1>


<p>Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :

</p>

<h2>Résultat</h2>

<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Création des objets v1 et v2
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);


//Affichage
$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->afficherVitesse();
$v2->afficherVitesse();

echo"Infos véhicule 1<br>***************<br>";
$v1->afficherInfos();

echo"Infos véhicule 2<br>***************<br>";
$v2->afficherInfos();