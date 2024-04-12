<?php

class Voiture1 {
    // Propriétés
    public $marque;
    public $modele;
    public $nbPortes;
    public $vitesseActuelle = 0;
    public $start = false;

    public function __construct($marque, $modele, $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    //getter et setter 
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }


    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }


    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }


    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function getStart()
    {
        return $this->start;
    }
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }


     // Méthodes
     public function demarrer() {
        $this->start=true;
        echo "Le véhicule ".$this->marque." ".$this->modele." démarre.<br>";
    }

    public function stopper() {
        $this->start=false;
        $this->vitesseActuelle = 0;
        echo "Le véhicule ".$this->marque." ".$this->modele." est stoppé.<br>";
    }

    public function accelerer(int $nbre) {
        if ($this->start==true) {
        $this->vitesseActuelle += $nbre;
        echo "Le véhicule ".$this->marque." ".$this->modele." accélère de ".$nbre." km / h.<br>";}
        else {
            echo "Le véhicule ".$this->marque." ".$this->modele." veut accélerer de ".$nbre.".<br>
            Pour accelerer, il faut démarrer le vehicule ".$this->marque." ".$this->modele.".<br>";
        }
    }

    public function afficherInfos() {
        echo "Nom et modèle du véhicule : " . $this->marque." ".$this->modele."<br>";
        echo "Nombre de portes : " . $this->nbPortes . "<br>";
        if ($this->start== true) {
            echo "Le véhicule ". $this->marque." ".$this->modele." est démarré<br>";}
            else {
                echo "Le véhicule ". $this->marque." ".$this->modele." est à l'arret<br>";
            }
        echo "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km / h<br>";
    }

    public function afficherVitesse() {
        echo "La vitesse du véhicule " .$this->marque." ".$this->modele." est de : ".$this->vitesseActuelle . " km / h<br>";
    }

}

