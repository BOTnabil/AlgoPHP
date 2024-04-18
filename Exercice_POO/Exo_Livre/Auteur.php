<?php

class Auteur {
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = array();
    }

    public function getNom(): string {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function __toString() {
        return $this->getNom() ." ".$this->getPrenom()."<br>";
    }
    
//permet d'ajouter un livre a son auteur
    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

//afficher la bibliographie de l'auteur
    public function afficherBibliographie() {
        $result = "<h2>Livres de $this<br></h2>";
        foreach ($this->livres as $livre) {
            $result .= $livre ;
        }
        return $result;
    }
}
