<?php

class CompteBancaire {
    private string $libelle;
    private float $solde;
    private string $devise;
    private string $titulaire;

    public function __construct(string $libelle, float $solde, string $devise, string $titulaire) {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
    }

    public function getLibelle(): string {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde(): float {
        return $this->solde;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDevise(): string {
        return $this->devise;
    }
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    public function getTitulaire(): string {
        return $this->titulaire;
    }
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }


    public function crediter($montant) {
        $this->solde += $montant;
    }

    public function debiter($montant) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant pour ce débitement.<br>";
        }
    }

    public function effectuerVirement($compteCible, $montant) {
        if ($this->solde >= $montant) {
            $this->debiter($montant);
            $compteCible->crediter($montant);
        } else {
            echo "Solde insuffisant pour effectuer le virement.<br>";
        }
    }

    public function afficherInformations() {
        $result = "Libellé: " . $this->libelle . "<br>
        Solde: " . $this->solde . " " . $this->devise . "<br>
        Titulaire: " . $this->titulaire . "<br>";
        return $result;
    }

    public function __toString() {
        return $this->libelle . " (" . $this->solde . " " . $this->devise . ")<br>";
    }
}