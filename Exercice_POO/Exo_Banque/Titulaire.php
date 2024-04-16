<?php

class Titulaire {
    private string $nom;
    private string $prenom;
    private $dateNaissance;
    private string $ville;
    private array $comptesBancaires;

    public function __construct(string $nom, string $prenom, $dateNaissance, string $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        $this->comptesBancaires = array();
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getVille() {
        return $this->ville;
    }

    public function ajouterCompteBancaire(CompteBancaire $compte) {
        $this->comptesBancaires[] = $compte;
    }

    private function calculerAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $dateAjd = new DateTime();
        $difference = $dateNaissance->diff($dateAjd);
        return $difference->y;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }

    public function afficherInformations() {
        $result = "Titulaire: " . $this->prenom . " " . $this->nom . "<br>
        Date de naissance: " . $this->dateNaissance . "<br>
        Ville: " . $this->ville . "<br>
        Âge: " . $this->calculerAge() . " ans<br>
        Comptes bancaires:<br>";
        foreach ($this->comptesBancaires as $compte) {
            $result .= "- " . $compte;
        }
        return $result;
    }
}
