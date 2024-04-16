<?php

class Livre {
    private string $titre;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;
    private string $auteur;

    public function __construct(string $titre, int $nbPages, int $anneeParution, float $prix, string $auteur) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    //getter et setter
    public function getTitre() {
        return $this->titre;
    }
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getAnneeParution()
    {
        return $this->anneeParution;
    }
    public function setAnneeParution($anneeParution)
    {
        $this->anneeParution = $anneeParution;

        return $this;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    public function __toString() {
        return $this->titre . " (" . $this->anneeParution.") : ". $this->nbPages ." pages / ". $this->prix ."€<br>";
    }



}

