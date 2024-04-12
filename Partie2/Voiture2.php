<?php

class Voiture2 {
    // Propriétés
    public $marque;
    public $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getInfos() {
        return "Nom et modèle du véhicule : " . $this->marque." ".$this->modele."<br>";
    }
}

class VoitureElec extends Voiture2 {
    private $autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getInfos() {
        return parent::getInfos() . "Autonomie : " . $this->autonomie . " km";
    }
}