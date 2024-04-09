<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<h2>Résultat</h2>

<?php

//Loading des classes
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//Nouvelles personnes
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

//Calcul de l'age
$dateAjd = new DateTime() ;
$age1 = $dateAjd->diff($p1->getDateDeNaissance());
$age2 = $dateAjd->diff($p2->getDateDeNaissance());

//Affichage
echo $p1->getPrenom()." ".$p1->getNom()." a ".$age1->format('%y ans')."<br>";
echo $p2->getPrenom()." ".$p2->getNom()." a ".$age2->format('%y ans')."<br>";