<?php

class Voiture2 {
    // Propriétés
    private string $marque;
    private string $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function __toString(){
        return $this->marque ." ".$this->modele;
    }

    public function getInfos() {
        return "Nom et modèle du véhicule : $this<br>";
    }
}

class VoitureElec extends Voiture2 {
    private int $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getInfos() {
        return parent::getInfos() . "Autonomie : " . $this->autonomie . " km";
    }
}