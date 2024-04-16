<?php

class Auteur {
    private $nom;
    private $prenom;
    private $livres;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = array();
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function __toString() {
        return $this->getNom() ." ".$this->getPrenom()."<br>";
    }
    
//permet d'ajouter un livre a son auteur
    public function ajouterLivre($livre) {
        $this->livres[] = $livre;
    }

//afficher la bibliographie de l'auteur
    public function afficherBibliographie() {
        echo "<h2>Livres de " . $this->getPrenom() . " ". $this->getNom()."<br></h2>";
        foreach ($this->livres as $livre) {
            echo $livre ;
        }
    }
}
