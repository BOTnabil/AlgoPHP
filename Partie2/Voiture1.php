<?php

class Voiture1 {
    // Propriétés
    private string $marque;
    private string$modele;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $start = false;

    public function __construct(string $marque, string $modele, int $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    //getter et setter 
    public function getMarque(): string
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }


    public function getModele(): string
    {
        return $this->modele;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }


    public function getNbPortes(): string
    {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }


    public function getVitesseActuelle(): int
    {
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function getStart(): bool
    {
        return $this->start;
    }
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }


     // Méthodes
    public function __toString() {
        return $this->getMarque() ." ".$this->getModele();
    }
    

     public function demarrer() {
        $this->start=true;
        echo "Le véhicule $this démarre.<br>";
    }

    public function stopper() {
        $this->start=false;
        $this->vitesseActuelle = 0;
        echo "Le véhicule $this est stoppé.<br>";
    }

    public function accelerer(int $nbre) {
        if ($this->start==true) {
        $this->vitesseActuelle += $nbre;
        echo "Le véhicule $this accélère de $nbre km / h.<br>";}
        else {
            echo "Le véhicule $this veut accélerer de $nbre.<br>
            Pour accelerer, il faut démarrer le vehicule $this.<br>";
        }
    }

    public function afficherInfos() {
        echo "Nom et modèle du véhicule : $this<br>";
        echo "Nombre de portes : " . $this->nbPortes . "<br>";
        if ($this->start== true) {
            echo "Le véhicule $this est démarré<br>";}
            else {
                echo "Le véhicule $this est à l'arret<br>";
            }
        echo "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km / h<br>";
    }

    public function afficherVitesse() {
        echo "La vitesse du véhicule " .$this." est de : ".$this->vitesseActuelle . " km / h<br>";
    }

}

