<?php

include 'Titulaire.php';
include 'CompteBancaire.php';

// Création des variables
$titulaire = new Titulaire("ASSATOUR", "Nabil", "2002-09-27", "Schiltigheim");

$compte1 = new CompteBancaire("Compte Courant", 1000, "EUR", $titulaire);
$compte2 = new CompteBancaire("Livret A", 3000, "EUR", $titulaire);

// Liaison des comptes a leur titulaire
$titulaire->ajouterCompteBancaire($compte1);
$titulaire->ajouterCompteBancaire($compte2);

// Affichage
echo $titulaire->afficherInformations();
echo "************<br>";
echo $compte1->afficherInformations();
echo "************<br>";

//virement
$compte1->effectuerVirement($compte2, 300);

//crediter et debitter
$compte2->crediter(1);
$compte1->debiter(1);