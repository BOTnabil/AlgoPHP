<?php

include 'Auteur.php';
include 'Livre.php';

$auteur = new Auteur("Eiichiro", "Oda");

$livre1 = new Livre("One Piece tome 1", 207, 2000, 5.17, $auteur);
$livre2 = new Livre("One Piece tome 2", 207, 2000, 5.17, $auteur);


//On lie les livres a son auteur
$auteur->ajouterLivre($livre1);
$auteur->ajouterLivre($livre2);

// Affichage
echo $auteur->afficherBibliographie() . "<br/>";
echo $livre1;
echo $auteur;
