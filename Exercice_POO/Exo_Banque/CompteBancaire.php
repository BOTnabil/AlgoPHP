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

    public function getLibelle() {
        return $this->libelle;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function getDevise() {
        return $this->devise;
    }

    public function getTitulaire() {
        return $this->titulaire;
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

    public function effectuerVirement($destinataire, $montant) {
        if ($this->solde >= $montant) {
            $this->debiter($montant);
            $destinataire->crediter($montant);
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

